<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
  background-color: #FFFFFF;
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>


@if ($submenu == true)
<div class="dropdown ">
  <button class="dropbtn" href="http://localhost:81/tranthanhquang/public/{{ $menu1->link }}">   {{ $menu1->name }}</button>
     @foreach($listmenu2 as $menu2)
  <div class="dropdown-content">
    <a href="http://localhost:81/tranthanhquang/public/{{ $menu2->link }}">{{ $menu2->name }}</a>
  </div>
  @endforeach
</div>
@else
<div class="dropdown">
  <button class="dropbtn" href="http://localhost:81/tranthanhquang/public/{{ $menu1->link }}">   {{ $menu1->name }}</button>
</div>
@endif