{
    var a = 0;
    function mouseOver(){
        const name = document.forms[`supform`][`name`].value;
        const email = document.forms[`supform`][`email`].value;
        const password = document.forms[`supform`][`password`].value;
        const tick = document.querySelector(`#check`);
         
        const emailCheck = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;



        if((name == "" || !email.match(emailCheck) || password == "" || tick.checked == false) && a==0){
        buttonMoveLeft();
        a = 1;
        return false;
        } 

        if((name == "" || !email.match(emailCheck) || password == "" || tick.checked == false) && a==1){
        buttonMoveRight();
        a = 2;
        return false;
        } 

        if((name == "" || !email.match(emailCheck) || password == "" || tick.checked == false) && a==2){
        buttonMoveLeft();
        a = 1;
        return false;
        } 

        else{

            document.getElementById('submit-btn').style.cursor = 'pointer';
            return false;
        };

    };


    

    function buttonMoveLeft(){

        const button = document.getElementById('submit-btn');
        button.style.transform = 'translateX(-160%)';

    };


    function buttonMoveRight(){

        const button = document.getElementById('submit-btn');
        button.style.transform = 'translateX(-160%)';

    };


    function resetBtn(){
        const button = document.getElementById('submit-btn');
        button.style.transform = 'translateX(0%)';
    };
    }