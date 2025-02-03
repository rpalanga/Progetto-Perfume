<script>
export default {
    name: 'AppHeader',
};
</script>

<template>
    <div>
        <nav class="bg-dark text-white m-0 p-3">
            <h1>The Perfume</h1>
        </nav>
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 text-center my-container">
                        <h2>The Perfume</h2>
                        <p>Sensazioni che difficilmente dimenticherai.</p>
                        
                    </div>
                </div>
            </div>
        </header>
    </div>

    
</template>


<style scoped>
.masthead {
    height: 100vh;
    min-height: 500px;
    background-image: url('https://images.pexels.com/photos/8450350/pexels-photo-8450350.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
.my-container {
  width: 100%;
  height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background: rgba(0, 0, 0, 0.4);
}

h2 {
  font-size: 120px;
  text-transform: uppercase;
  font-family: 'Gambetta', serif;
  letter-spacing: -3px;
  transition: 700ms ease;
  font-variation-settings: "wght" 311;
  margin-bottom: 0.8rem;
  color: Gold;
  outline: none;
  text-align: center;
}

h2:hover {
  font-variation-settings: "wght" 582; 
  letter-spacing: 1px;
}

p {
  font-size: 1.2em;
  line-height: 150%;
  text-align: center;
  color: MintCream;
  letter-spacing: .5px;
}

</style>