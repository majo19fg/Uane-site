<template>

    <div>
        <div class="col-md-3" v-for="programa in items" :key="programa.id" >
            <div class="flip-container mt-15" ontouchstart="this.classList.toggle('hover');" >
                <div class="flipper">
                    <div class="front">
                    <!-- front content -->
                    <img v-bind:src="'/laravel/public/multi/images/'+programa.miniatura" alt="Image alt text" />
                    <div class="block-content" >
                        <h2>Fecha de inicio: <br>{{ programa.inicio_curso | moment('L')}}</h2>
                        <h3>{{ programa.title }}</h3>
                        <!-- <div class="tag">Exhibition</div>
                        <div class="tag">Kids &amp; families</div> -->
                    </div>
                    </div>
                    <div class="back">
                    <!-- back content -->
                    <p>
                        {{ programa.descripcion_corta.substring(0,200)+"..." }}
                    </p>
                    <a class="button"  v-bind:href="urlprograma+programa.url">Ver programa</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>


<script>
export default {
    data(){
        return {
            items: []
        }
    },
    props: [
        'campus', 
        'urlprograma',
        ],
    methods: {
        getPrograma() {
            var _this = this;
            var campusURL = '/api/programas/'+_this.$props.campus;

            axios.get(campusURL).then(response => {
              _this.items = response.data;
              console.log('esta funcionando esto bien');
            }).catch(e => {
              _this.errors.push(e)
            })


            // axios.get(campusURL).then(function (response) {
            //      _this.items = response.data;
            //     console.log(items.url);

            //      items.url = 'url';
            // })
        }
    },
    mounted () {
      this.getPrograma();
    }
}
</script>



<style>
/* entire container, keeps perspective */
.flip-container {
  -webkit-perspective: 1000;
  -moz-perspective: 1000;
  -ms-perspective: 1000;
	perspective: 1000;
  -ms-transform: perspective(1000px);
  -moz-transform: perspective(1000px);
  -moz-transform-style: preserve-3d;
  -ms-transform-style: preserve-3d;
	transform-style: preserve-3d;
}

.flip-container, .front, .back {
	width: 270px;
	height: 400px;
    border-radius: 10px;
}

.front, .back {
  background: #fff;
  box-shadow: 0 1px 0 rgba(115,36,61,0.1);
  text-align: center;
}

.back {
  background: #343434;
  color: #fff;
  padding: 40px 20px;
}

span .h3, .back h3 {
  text-transform: uppercase;
  color:#fff;
}

.front h3 {
  font-weight: 700;
  margin-top: 0;
  color:#73243d;
  font-size: 1.2em;
}

.front h2:after {
  content: "";
  height: 2px;
  width: 40px;
  display: block;
  background: rgba(64,186,179,5);
  margin: 15px auto;
}

.block-content {
  padding: 15px 20px 20px 20px;
}

.front h2 {
  font-size: 1em;
  font-weight: normal;
  line-height: 20px;
  color:#73243d;
}
.back{
    background:#73243d;
}
.tag {
  color: #000;
  background: #f2f2f2;
  display: inline-block;
  font-size: 10px;
  padding: 8px 12px;
  border-radius: 8px;
}

.back p {
  margin: 40px 0;
  line-height: 20px;
}

.back .button {
  background: transparent;
  border: solid 2px #fff;
  color: #fff;
  text-decoration: none;
  padding: 15px 10px;
  display: block;
  font-size: 20px;
  margin: 0 10px;
  transition: all 200ms ease-in-out;
}

.back .button:hover,
.back .button:focus {
  background: #de453b;
  border: solid 2px #de453b;
}

/* flip speed goes here */
.flipper {
	transition: 0.4s;
	transform-style: preserve-3d;

	position: relative;
}

/* hide back of pane during swap */
.front, .back {
	backface-visibility: hidden;
	transition: 0.6s;
	transform-style: preserve-3d;

	position: absolute;
	top: 0;
	left: 0;
}

/*  UPDATED! front pane, placed above back */
.front {
	z-index: 2;
	transform: rotateY(0deg);
}

/* back, initially hidden pane */
.back {
	transform: rotateY(-180deg);
}

/*  UPDATED! flip the pane when hovered */
	.flip-container:hover .back {
		transform: rotateY(0deg);
	}
	.flip-container:hover .front {
	    transform: rotateY(180deg);
	}


</style>

