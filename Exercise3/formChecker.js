function checkForm() {
    let s1 = false
    let s2 = false
    let s3 = false
    let s4 = false
    let s5 = false
    let success = false
    if (parseInt(document.getElementById("q1").value) >= 0){
        s1 = true
    }
    if (parseInt(document.getElementById("q2").value) >= 0){
        s2 = true
    }
    if (parseInt(document.getElementById("q3").value) >= 0){
        s3 = true
    }
    if (document.getElementById("password").value != ""){
        s4 = true
    }
    if (/\S+@\S+\.\S+/.test(document.getElementById("username").value)){
        s5 = true
    }
    if (s1 == true && s2 == true && s3 == true && s4 == true && s5 == true){
        success = true
        return true
    }
    if (success == false){
        alert("You must enter an email, password, and every quantity must be filled in.")
        return false
    }


}