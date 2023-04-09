<style>
.wrapper {
  position: relative;
  display: block;
  width: 90%;
  height: auto;
  margin: 0 15px 0 auto;
  clear: left;
}
.wrapper::after {
  clear: both;
  content: "";
  display: block;
}
.wrapper.squares .square {
  transition: border-radius 150ms ease, transform 350ms ease;
}
.wrapper.squares .square:hover {
  border-radius: 50%;
  transform: rotate(360deg);
}
.a {
  position: relative;
  display: inline-block;
  margin: 0 10px 10px 0;
  padding: 0;
  overflow: hidden;
  float: left;
  z-index: 1050;
}
.a .faa {
  position: relative;
  width: 48px;
  height: 48px;
  font-size: 24px;
  color: white;
  text-align: center;
  line-height: 48px;
  z-index: 1055;
}
.twitter {
  background: #55acee;
}
.facebook {
  background: #3b5999;
}
.linkedin {
  background: #0077B5;
}
.google-plus
{
  background : #dd4b39;
}
.whatsapp
{
  background : #25D366;
}
.email{
  background : #33CAFF; 
}
.link{
  background : #1d89ff;
}
.instagram{
  background : #CA186E;
}
</style>
        <div class="wrapper squares">
		<a href="#"  id="fb" class="facebook square a">
		<i class="fa faa fa-facebook"></i></a>
		<a href="#"   id="tr"  class="twitter square a">
		<i class="fa faa fa-twitter"></i></a>
		<a href="#"  id="ln" class="linkedin square a">
		<i class="fa faa fa-linkedin"></i></a>
		<a href="#"  id="whtapp"  target="blank" class="whatsapp square a">
		<i class="fa faa fa-whatsapp"></i></a>
	<a href="javascript:copyLink();"   id="cpy" class="link square a">
		<i class="fa faa fa-link"></i></a>
	<a href="#" id="mal"  class="email square a">
		<i class="fa faa fa-envelope"></i></a>
	<a href="#"   id="insta" class="instagram square a">
		<i class="fa faa fa-2x fa-instagram"></i></a>
		</div>
		<div id="status"></div>
