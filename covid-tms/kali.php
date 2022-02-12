
.symptoms{
    background:url(../images/background-img.jpg) no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
}
.symptoms h1{
    color: #000;
}
.symptoms .column{
    display: flex;
    align-items: center;
    justify-content: center;
}

.symptoms .column .main-image img{
    width: 43vh;
}

.symptoms .column .box-container{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
}

.symptoms .column .box-container .box{
    margin:1rem;
    text-align: center;
}

.symptoms .column .box-container .box img{
    width:20rem;
    padding:1rem;
}

.symptoms .column .box-container .box h3{
    font-size: 2rem;
    color:var(--blue);
}



.symptoms .container {
    width  : 960px;
    margin : 0 auto;
  }
  
  .container:after{
    clear   : both;
    display : table;
    content : '';
  }
  
  .bg-items {
    padding: 20px;
    width  : 240px;
    height : 260px;
    margin : 20px;
    background-color: white;
    float  : left;
    cursor : pointer;
    box-shadow : 3px 3px 5px 0px rgba(0,0,0,0.5);
  }
  
  .items {
    width  : 240px;
    height : 260px;
    position: relative;
    overflow: hidden;
    background-color: #102B46;
  }

  
  .details {
    background-color : rgba(0,0,0,0.5);
    width            : 220px;
    height           : 240px;
    padding          : 12px;
    top : 0;
    left: 0;
    font-family : georgia;
    color       : #fff;
    opacity : 0;
    transition : opacity .8s;
  }
  
  .details h3 {
    margin-bottom : 20px;
  }
  
  .details h6 {
    text-align : right;
    margin-top : 40px;
  }
  
  .details p {
    font-size : 14px;
    font-style: italic;
    text-align: center;
    line-height : 20px;
  }
  
  .items:hover .details {
    opacity : 1;
    transition : opacity .2s .3s;
  }
  
  .items div {
    position : absolute;
  }