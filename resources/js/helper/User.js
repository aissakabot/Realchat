import Token from "./Token";
import AppStorage from "./AppStorage";

class User{
        login(data){
            axios.post('api/auth/login',data).then(
                res=>{
                   // console.log(res.data)
                 Token.payload(res.data.access_token)
                 this.responseAfterLogin(res)
                }
            ).catch(err=>console.log(err.response.errors))
    }

    responseAfterLogin(res){
        
        const access_token=res.data.access_token
        const username=res.data.user
        console.log(username)
        if(Token.isValid(access_token)){
           
            AppStorage.store(username,access_token)
            window.location='/forum'
            
        } else{
            console.log("error token")
        }
    }

    hasToken(){
        const storedToken=AppStorage.getToken()
        if(storedToken){
            Token.isValid(storedToken) ? true :false
        }
        return false
        
    }
    logedIn(){
        return this.hasToken()
       
    }
    logout(){
        AppStorage.clear() 
        window.location='/forum'
    }
    name(){
        if(this.logedIn()){
            return AppStorage.getUser()
        }
       
    }
    id(){
        if(this.logedIn()){
            const payload=Token.payload(AppStorage.getToken())
            return payload.sub
        }
    }
}
export default User=new User();