<style>
body{
  margin: 0;
  padding: 0;
  font-family: Roboto;
  background-repeat: no-repeat;
  background-size: cover;
  background-color: #265073;
  height: 100vh;
  overflow: hidden;
}

.center{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 29vw;
  background: white;
  border-radius: 10px;
}

.center h1{
  text-align: center;
  padding: 0 0 20px 0;
  border-bottom: 1px solid silver;
}

.center form{
  padding: 0 40px;
  box-sizing: border-box;
}

form .txt_field{
  position: relative;
  border-bottom: 2px solid #adadad;
  margin: 30px 0;
}

.txt_field input{
  width: 100%;
  padding: 0 5px;
  height: 40px;
  font-size: 16px;
  border: none;
  background: none;
  outline: none;
}

.txt_field label{
  position: absolute;
  top: 50%;
  left: 5px;
  color: #adadad;
  transform: translateY(-50%);
  font-size: 16px;
  pointer-events: none;
}
.pass{
  margin: -5px 0 20px 5px;
  color: #a6a6a6;
  cursor: pointer;
}

.pass:hover{
  text-decoration: underline;
}

input[type="Submit"]{
  width: 100%;
  height: 50px;
  border: 1px solid;
  border-radius: 25px;
  font-size: 18px;
  font-weight: 700;
  cursor: pointer;

}


.signup_link{
  margin: 30px 0;
  text-align: center;
  font-size: 16px;
  color: #666666;
}

.signup_link a{
  color: #2691d9;
  text-decoration: none;
}

.signup_link a:hover{
  text-decoration: underline;
}

.HomeAbout{
  width: 100vw;
  height: 25vh;
}
  </style>
  
