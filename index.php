<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
  <title>Dischi</title>
</head>
<body>
  <div id="app">
    <div style="background: rgb(99,249,134); background: linear-gradient(294deg, rgba(99,249,134,1) 0%, rgba(81,43,174,1) 37%);">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 d-flex justify-content-between flex-wrap">
            <div class="card w-25 mx-1 mb-4 border-0 text-center shadow" style="background-color:rgb(103, 103, 231) ;" v-for="(element,index) in data" :key="index">
              <img :src="element.poster" class="card-img-top w-75 mx-auto rounded-0 pt-2" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{ element.title }}</h5>
                <span class="d-block">{{ element.author }}</span>
                <span class="d-block">{{ element.year }}</span>
                <span class="d-block">{{ element.genre }}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js' integrity='sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==' crossorigin='anonymous'></script>
<script src="main.js"></script>
</body>
</html>
