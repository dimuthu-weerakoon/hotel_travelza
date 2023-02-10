@extends('pages_layouts.layout')
@section('content')
    <div class="fixed-top">
    <nav class="navbar navbar-expand-lg bg-light ">
  <div class="container-fluid">

    <a class="navbar-brand" href="index.php">Travelza</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="fixed" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="places.php">Places</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Acounts
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="gallery.php">Gallery</a></li>
            <li><a class="dropdown-item" href="log.php">Loging</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Logout</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="contact.php">Contact us</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      </div>
    </div>
  </div>
</nav>

<header>
  <div class="container">
    <div class="left">
      <h3>BILLING ADDRESS</h3>
      <form>
        Full name
        <input type="text" name="" placeholder="Enter name">
        Email
        <input type="text" name="" placeholder="Enter email">

        Address
        <input type="text" name="" placeholder="Enter address">

        City
        <input type="text" name="" placeholder="Enter City">
        <div id="zip">
          <label>
            State
            <select>
              <option>Choose State..</option>
              <option>Rajasthan</option>
              <option>Hariyana</option>
              <option>Uttar Pradesh</option>
              <option>Madhya Pradesh</option>
            </select>
          </label>
            <label>
            Zip code
            <input type="number" name="" placeholder="Zip code">
          </label>
        </div>
      </form>
    </div>
    <div class="right">
      <h3>PAYMENT</h3>
      <form>
        Accepted Card <br>
        <img src="image/card1.png" width="100">
        <img src="image/card2.png" width="50">
        <br><br>

        Credit card number
      <input type="text" name="" placeholder="Enter card number">

        Exp month
        <input type="text" name="" placeholder="Enter Month">
        <div id="zip">
          <label>
            Exp year
            <select>
              <option>Choose Year..</option>
              <option>2022</option>
              <option>2023</option>
              <option>2024</option>
              <option>2025</option>
            </select>
          </label>
            <label>
            CVV
            <input type="number" name="" placeholder="CVV" id="cvv">
          </label>
        </div>
      </form>
      <input type="submit" name="" value="Proceed to Checkout">
    </div>
  </div>
  @endsection
