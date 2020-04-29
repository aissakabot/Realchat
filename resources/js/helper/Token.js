class Token {
    payload(token){
      const payload=  token.split('.')[1]
     // console.log(this.decode(payload))
     return this.decode(payload)
    }
    decode(payload){
        return JSON.parse(atob(payload))
    }
    isValid(token){
        const payload=this.payload(token)
       if(payload){
           return payload.iss=='http://localhost:9000/api/auth/login' ||
            'http://localhost:9000/api/auth/signup'  ? true : false
       }
       return false
    }
    
}
export default Token=new Token();