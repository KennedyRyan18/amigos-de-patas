<?php header("content-type: text/css;") ?>

html, body{
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
}

body{
    background: url(../../img/v1008-25-a.jpg) no-repeat center center fixed;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    
}


header{
    display: flex;
    align-items: center;
    justify-content:space-around;
    width: 100%;
    height: 105px;
    background: linear-gradient(90deg, #FFC3A0 0%, #FFAFBD 100%);
    border-bottom: 1px #ccc solid;
}

main{
    display: flex;
    flex-direction: column;
    justify-items: center;
    align-items: center;
}
/*Profille*/

.Perfil{
    display: flex;
    align-items: center;
    text-align: right;
}

.log h3, p{
    margin: 4px;
    margin-right: 13px;
}

.foto{
    display: flex;
    align-items: center;
}

.foto img{
    margin-top: 8px;
    /* margin-left: 10em; */
    border: 3px solid rgb(200, 200, 200);
    border-radius: 50%;
}

/*Logo*/
.img-fluid {
    width: 200px;
    aspect-ratio: auto 200 / 200;
    height: 90px;
}
.logo{
    color: #813F3F;
}
.logo h1{
    font-family: Impact;
}


/* btns*/

.box{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-top: 50px;
    width: 1100px;
    height: 450px;
    background-color: white;
    box-shadow: -5px 6px 8px #3e3e3e63;
    border-radius: 10px;
}

.box h3, h4{
    margin: 10px;
}

.btn{
    display: flex;
    margin: 0;
    padding: 0;
    list-style: none;
}

.btn a{
    text-decoration: none;
    color: black;
}

ul li a{
    display: block;
    position: relative;
    margin: 30px;
    width: 220px;
    height: 240px;
    border-radius: 20px;
    background-color: #ffafbc69;
}

ul li.active a{
    background: blueviolet;
    color: white;
}

.container1{
    display: flex;
    flex-direction: column;
    align-items: center;
    /* margin-right: 100px;  */
    border-radius: 15px;
    /* box-shadow: -4px 6px 5px #ccc; */
    height: 200px;
}

.container1 img{
    margin-top: 30px;
    border-radius: 50%;
}


.container2{
    display: flex;
    flex-direction: column;
    align-items: center;
    /* margin-right: 100px; */
    border-radius: 15px;
    /* box-shadow: -5px 4px 4px 0px rgba(138, 131, 131, 0.2); */
    height: 200px;

}

.container2 img{
    margin-top: 30px;
    border-radius: 50%;
}


.container3{
    display: flex;
    flex-direction: column;
    align-items: center;
    border-radius: 15px;
    /* box-shadow: -5px 4px 4px 0px rgba(138, 131, 131, 0.2); */

}

.container3 img{
    margin-top: 30px;
    border-radius: 50%;
}



h2{
    font-family: Inter;
    font-size: 30px;
    text-align: center;

}

h3{
    font-family: Inter;
    font-size: 30px;
}

h4{
    font-size: 20px;
    text-align: center;
}

/*Efeito habiltado e desabilitado*/




    

/*parte de busca*/

.box2{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-evenly;
    margin-top: 20px;
    width: 660px;
    height: 80px;
    background-color: white;
    box-shadow: -5px 6px 8px #3e3e3e63;
    border-radius: 10px;
    margin-bottom: 30px;
}

.pet{
    display: flex;
    flex-direction: rom;
    align-items: center;
}

.pet select{
    height: 35px;
    width: 270px;
    border-style: none;
    margin-left: .3em;
    background: white;
    border: 1px solid black;
}

/*.btn-buscar{
    background-color:#FFC3A0;
    width: 100px;
    height: 35px;
    border-radius: 5px;
    text-align: center;
    padding-top: 9px;
    box-shadow: -3px 2px #ccc;
    text-decoration: none;
}*/

.btn-buscar{
    background-color:#FFC3A0;
    width: 100px;
    height: 35px;
    border: 1px solid #FFC3A0;
    box-shadow: 5px 3px 5px #ccc;
    border-radius: 5px;
    text-align: center;
    text-decoration: none;
    margin-left: 15px;
}
.btn-buscar:hover{
    border: 2px solid rgb(17, 54, 219);
}