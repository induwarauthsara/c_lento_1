function sign(){

    document.getElementById("loaddot").className = 'd-block';
    document.getElementById("head").style.visibility = 'hidden';


    var email = document.getElementById("email");
    var password = document.getElementById("password");

    var f = new FormData();
    f.append("e",email.value);
    f.append("p",password.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function(){
        if(r.readyState == 4 && r.status == 200){
            var t = r.responseText;
            if(t == "Success"){
                document.getElementById("head").style.visibility = 'visible';
                document.getElementById("loaddot").className = 'd-none';
                 alert("success");
            }else if(t == "signIn"){
                 window.location = "home.php";
            }else if(t == "signUp"){
                document.getElementById("head").style.visibility = 'visible';
                document.getElementById("loaddot").className = 'd-none';
                document.getElementById("backemail").className = 'd-block';
               document.getElementById("sec1").className = 'd-none';
               document.getElementById("sec2").className = 'd-block';
              
            }else{
                if(t == "Please Enter your email Address" || t == "Your email address must have between 10 and 100 characters" ||
                 t == "Invalid email address" || t == "Duplicate email"){
                    document.getElementById("head").style.visibility = 'visible';
                    document.getElementById("loaddot").className = 'd-none';
                    document.getElementById("error").style.display = 'block';
                    document.getElementById("errorem").innerHTML = t;
                    document.getElementById("email").style.borderColor = '#DB1010';
                    
                }else if(t == "Something went wrong"){
                    document.getElementById("loaddot").className = 'd-none';
                }else{
                    document.getElementById("head").style.visibility = 'visible';
                    document.getElementById("loaddot").className = 'd-none';
                    document.getElementById("errorps").style.display = 'block';
                    document.getElementById("errorpss").innerHTML = t;
                    document.getElementById("password").style.borderColor = '#DB1010';
                }
                
            }
        }
    }

    r.open("POST","filtersignProccess.php",true);
    r.send(f);

}

function backemail(){

     document.getElementById("backemail").className = 'd-none';
               document.getElementById("sec1").className = 'd-block';
               document.getElementById("sec2").className = 'd-none';
               document.getElementById("skip").className = 'd-none';
}

function onback(){
    document.getElementById("skip").className = 'd-none';
    document.getElementById("next").className= 'd-block';
    document.getElementById("conimg").style.display = 'block';
    document.getElementById("breakimg").style.display = 'none';

}

function emailerror(){
    document.getElementById("email").style.borderColor ='';
    document.getElementById("error").style.display = 'none';
}

function passerror(){
    document.getElementById("password").style.borderColor ='';
    document.getElementById("errorps").style.display = 'none';
}

function closepop(){
    document.getElementById("closepop").style.display = 'none';
}

function validation(){


    var fname = document.getElementById("fname");
    var lname = document.getElementById("lname");
    var verification = document.getElementById("verification");
    var gender = document.getElementById("gender");
    var country = document.getElementById("country");

    

    var f = new FormData;
    f.append("fname",fname.value);
    f.append("lname",lname.value);
    f.append("v",verification.value);
    f.append("gen",gender.value);
    f.append("cou",country.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function(){
               if(r.status == 200 && r.readyState == 4){
                var t = r.responseText;
                if(t== "Success"){
document.getElementById("rcode").className = 'd-none';
document.getElementById("next").className= 'd-block';
                }else{
                    alert(t);
                }
               }

      
    }
    
r.open("POST","validation.php",true);
r.send(f);

}

function next(){
    document.getElementById("title").innerHTML = 'step 02';
    document.getElementById("next").className = 'd-none';
    document.getElementById("skip").className = 'd-block';
    document.getElementById("backemail").className = 'd-none';
    document.getElementById("backpara").className = 'd-block';
    document.getElementById("conimg").style.display = 'none'
    document.getElementById("breakimg").style.display = 'block';
}

function uploadimage(){

    var image = document.getElementById("inputimage");

    var f = new FormData();
    f.append("img",image.files[0]);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function(){
        if(r.status == 200 && r.readyState == 4){
            var t = r.responseText;
           if(t == "Success"){
            window.location = "home.php";
           }else{
            alert(t);
           }
        }
    }


    r.open("POST","upimage.php",true);
    r.send(f);


}

/*
const button = $('#btn')
const overlay = $('#overlay')

const close = $('#close')
const body = $('body')
button.on('click', () => {
    overlay.removeClass('visually-hidden');
})

close.on('click', () => {
    overlay.addClass('visually-hidden');
})



const continue1 = $('#continue1')
const box1 = $('#box1')
const box2 = $('#box2')
const close1 = $('#close1')

continue1.on('click', () => {
    box1.addClass('visually-hidden');
    box2.removeClass('visually-hidden');
})

close1.on('click', () => {
    box2.addClass('visually-hidden');
    box1.removeClass('visually-hidden');
    overlay.addClass('visually-hidden');
})


const continue2 = $('#continue2')
const box3 = $('#box3')
const close2 = $('#close2')

continue2.on('click', () => {
    box2.addClass('visually-hidden');
    box3.removeClass('visually-hidden');
})

close2.on('click', () => {
    box3.addClass('visually-hidden');
    box1.removeClass('visually-hidden');
    overlay.addClass('visually-hidden');
})



const continue3 = $('#continue3')
const box4 = $('#box4')
const close3 = $('#close3')

continue3.on('click', () => {
    box3.addClass('visually-hidden');
    box4.removeClass('visually-hidden');
})

close3.on('click', () => {
    box4.addClass('visually-hidden');
    box1.removeClass('visually-hidden');
    overlay.addClass('visually-hidden');
})
*/

function upprofile(){


    var fname = document.getElementById("fn");
    var lname = document.getElementById("ln");
    var email = document.getElementById("email");
    var pw = document.getElementById("pw");
    var mb = document.getElementById("mb");
    var gen = document.getElementById("gen");
    var nic = document.getElementById("nic");
    var cry = document.getElementById("cry");
    var adr = document.getElementById("adr");
    var primage = document.getElementById("updateimage");

    var f = new FormData();
    f.append("f",fname.value);
    f.append("l",lname.value);
    f.append("em",email.value);
    f.append("pw",pw.value);
    f.append("m",mb.value);
    f.append("gen",gen.value);
    f.append("nic",nic.value);
    f.append("cry",cry.value);
    f.append("adr",adr.value);
    f.append("img",primage.files[0]);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function(){
        if(r.readyState == 4 && r.status == 200){
            var t = r.responseText;
        alert(t);

        }
    }

    r.open("POST","updateProfileProccess.php",true);
    r.send(f);
    

}

