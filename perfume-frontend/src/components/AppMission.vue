<script>
export default {
    name: 'AppMission'
};
</script>
<template>
     <div id="my-circle-carousel" class="container-fluid circle-bg p-3 mt-5 ">
        <div class="row justify-content-center ">
            <div class="col-10 ">

                <div id="carouselIndicators" class="carousel slide d-flex flex-column align-items-center rounded-3" style=" background-color: rgba(0, 0, 0, 0.4); height: 350px  ;">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1" id="my-cirlce-button"></button>
                        <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2" id="my-circle-button"></button>

                    </div>
                    <div class="carousel-inner ">
                        <div class="carousel-item active  my-circle-padding">
                            <div class="d-flex flex-column align-items-center ">
                                <!-- <img src="../../public/images/woman_testimonial.png" class="d-block w-20 p-4" alt="..."> -->
                                <h3 class=" text-white py-3 text-center">“Fabbricherò tutti i profumi che desiderate ma voi dovete insegnarmi a catturare l'odore di ogni cosa che esiste, potete farlo?” <br> - Jean-Baptiste Grenouille</h3>
                                

                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="d-flex flex-column align-items-center my-circle-padding">
                                
                                <h3 class=" text-white py-3 text-center">Sei hai Bisogno di Personalità<br> Sai dove Trovarci</h3>
                                

                            </div>
                        </div>
                    </div>
                    <div class="blurred-background"></div>
                </div>
            </div>

        </div>
    </div>

</template>
<style scoped>

.circle-bg {
    background-image: url('https://images.pexels.com/photos/19857322/pexels-photo-19857322/free-photo-of-heap-of-red-roses.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');
    background-size: cover;
    background-position: bottom;
    background-position: bottom;
  
    position: relative;
    



}
.blurred-background {
  /* Match dimensions of .circle-bg */
  width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background-image: url('https://images.pexels.com/photos/5625129/pexels-photo-5625129.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');
    background-size: cover;
    background-position: bottom;
    filter: blur(5px);
    z-index: -1;
}


#my-circle-carousel .carousel-indicators button {
    border-radius: 50%;
    width: 16px;
    height: 16px;
    background-color: #fff;
    /* Add background color for visibility */
    border: 1px solid #ccc;
    /* Add a border for better contrast */
}

.my-circle-padding {
    padding: 80px 60px;
}


@media screen and (max-width:500px){
    .my-circle-padding {

        padding: 20px 60px 80px;

    }   
}

@media screen and (max-width:370px){
    .my-circle-padding {
        
        padding: 15px 60px 100px;

    }   
}

</style>