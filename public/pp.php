
<div class="profile-pic">
  <label class="-label" for="file">
    <span class="glyphicon glyphicon-camera"></span>
    <span>Choose profil photo</span>
  </label>
  <input id="file" type="file" onchange="loadFile(event)"/>
  <img src="https://cdn.pixabay.com/photo/2017/08/06/21/01/louvre-2596278_960_720.jpg" id="output" width="200" />
</div>

<style>
    /* Mixin */
.object-center {
  display: flex;
  justify-content: center;
  align-items: center;
}

/* Variables */
:root {
  --circle-size: 165px;
  --radius: 100px;
  --shadow: 0 0 10px 0 rgba(255, 255, 255, 0.35);
  --font-color: rgb(250, 250, 250);
}

/* Styles */
.profile-pic {
  color: transparent;
  transition: all 0.3s ease;
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
  transition: all 0.3s ease;
}

.profile-pic input {
  display: none;
}

.profile-pic img {
  position: absolute;
  object-fit: cover;
  width: var(--circle-size);
  height: var(--circle-size);
  box-shadow: var(--shadow);
  border-radius: var(--radius);
  z-index: 0;
}

.profile-pic .-label {
  cursor: pointer;
  height: var(--circle-size);
  width: var(--circle-size);
}

.profile-pic:hover .-label {
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: rgba(0, 0, 0, 0.8);
  z-index: 10000;
  color: var(--font-color);
  transition: background-color 0.2s ease-in-out;
  border-radius: var(--radius);
  margin-bottom: 0;
}

.profile-pic span {
  display: inline-flex;
  padding: 0.2em;
  height: 2em;
}

body {
  height: 100vh;
  background-color: rgb(25, 24, 21);
  display: flex;
  justify-content: center;
  align-items: center;
}

body a:hover {
  text-decoration: none;
}

</style>



<script>
  var image = document.getElementById("output");

var loadFile = function(event) {
  image.src = URL.createObjectURL(event.target.files[0]);
  localStorage.setItem("profilePic", image.src);
};

// Vérifie si une image est stockée dans le localStorage
if(localStorage.getItem("profilePic")) {
  image.src = localStorage.getItem("profilePic");
}

</script>



<!-- <input type="file" id="inputFile">
<img src="view" alt="view">

<script>
    document.querySelector("#inputFile").addEventListener("change", function(){

        
        // console.log(this.files)

        const reader = new FileReader();

        reader.addEventListener("load", () => {

            console.log(reader.result)
        

        
        });

        reader.readAsDataURL(this.files[0]);
        localStorage.setItem("imageFiles", reader.result);


    });

    document.addEventListener("DOMcontentLoaded", () => {
        const recentImageDataURL = localStorage.getItem("imageFiles");

        if(recentImageDataURL) {
            document.querySelector("#view").setAttribute("src", recentImageDataURL);
        }
    })

</script> -->