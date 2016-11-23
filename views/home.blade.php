@extends ('base')

@section('browsertitle')
Bruno: Register 2
@stop


@section('css')
<style>
  .bigger-icon {
    font-size: 48px;
    color:#730019;
  }
  .footer-background {
    background-color: black;
    color: white;
  }

  .carousel {
      width: 100%;
  }

  h6 {
    color:#fffff;
    font-size: 16px;
    font-weight: 500;
    line-height: normal;
  }

  hr {
    margin-top: 20px;
    margin-bottom: 20px;
    height: 1px;
    border: none;
    background: #730019;
    width: 5%;
  }

  .pratos {
    font-size: 16px;
    font-weight: 900;
    color:#707070;
  }

  .rede {
    color:red;
  }

</style>
@stop

@section('outsidecontanier')
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" >
<!-- Indicators -->
<ol class="carousel-indicators">
  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
</ol>

<!-- Wrapper for slides -->
<div class="carousel-inner" role="listbox">


  <div class="item active">
    <img src="/assets/slider/1.jpg" alt="image2">
      <div class="carousel-caption">
        <h3>Selected Colombian beans</h3>
        <p>The best coffee on the west!!! *** images retrived from the internet for testing purposes</p>
      </div>
    </div>

  <div class="item ">
    <img src="/assets/slider/4.jpg" alt="image3" >
    <div class="carousel-caption">
      <h3>Bruno Latin American food</h3>
      <p>88 Gamon Street, Yarraville 9358-5478 *** images retrived from the internet for testing purposes</p>
    </div>
  </div>

  <div class="item">
    <img src="/assets/slider/3.jpg" alt="image3">
    <div class="carousel-caption">
      <h3>A very sofisticated Aussie Cafe</h3>
      <p>Inspired on Latin America *** images retrived from the internet for testing purposes</p>
    </div>
  </div>
</div>

<!-- Controls -->
<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div>
@stop


@section('content')

        <div class="row">
          <div class="col-md-12 text-center">
            <h2>LADY MOUSTACHE PROUDLY OFFER </h2>
            <hr/>
              <br /><br />
          </div>
        </div>



        <div class="row">
          <div class="col-md-4  text-center" style="border-radius: 50px" >

            <span class="glyphicon glyphicon-glass bigger-icon " aria-hidden="true"></span>
            <h6>Signature Cocktails and the finest booze</h6>
            <p>The best cocktails available day and night. The finest local beers and memorable wines are also offered as a part of our menus.</p>
          </div>
          <div class="col-md-4  text-center">

            <span class="glyphicon glyphicon-cutlery bigger-icon" aria-hidden="true" ></span>
            <h6>Two Amazing menus</h6>
            <p>Lady moustache offer diverse option on food. the day and night menu will bring the south american touch combined with the traditional aussie breaky and lunch cousine.</p>
          </div>
          <div class="col-md-4  text-center">
            <span class="glyphicon glyphicon-lamp bigger-icon" aria-hidden="true"></span>
            <h6>Private Function</h6>
            <p>Providing a delicious private first floor, including balcony looking onto the city.You are free to enjoy.Lady Mo’s let you enjoy your guests, whilst we take care of the hosting.</p>
          </div>
        </div>
        <br /><br />
        <div class="row">
          <div class="col-md-12 text-center">
            <h2>THE FOOD..</h2>
            <hr/>
            <br /><br />
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <h2>Day Menu</h2>
            <hr style="width:95%;" align="left"/>
            <div class="row">
                <div class="col-md-10 pratos">Patatas</div>
                <div class="col-md-2">$8,00</div>
                <div class="col-md-12">mild spiced potato wedges with house-made sauces. (V)  (GF)</div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-10 pratos">Churrascos</div>
                <div class="col-md-2">$8,00</div>
                <div class="col-md-12">Chilean Steak Sandwich served open w/ tomato, avocado, cheese, jalapeño and mayonnaise and patatas</div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-10 pratos">Sopapilla</div>
                <div class="col-md-2">$8,00</div>
                <div class="col-md-12">Pumpkin pillows with poached eggs, herbed salad and guacamole. (V) (LM)</div>
            </div>

          </div>

          <div class="col-md-6">
            <h2>Night Menu</h2>
            <hr style="width:95%;" align="left"/>
            <div class="row">
                <div class="col-md-10 pratos">Lady Mo's Shared Platter</div>
                <div class="col-md-2">$8,00</div>
                <div class="col-md-12"> A selection of our favourite tasty morsels to be shared and savoured in good company.</div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-10 pratos">Chicken Quesadilla.</div>
                <div class="col-md-2">$8,00</div>
                <div class="col-md-12">Tortilla bread with spiced chicken, cheesy goodness. Topped with guacamole and sour cream.</div>
            </div>


          </div>

        </div>

        <br><br>

      @include ('drinks')

      @include ('makereservation')
@stop
