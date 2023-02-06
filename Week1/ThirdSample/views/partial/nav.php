<style>
  .bg-gray-800 {
    background-color: #33FFBD;
  }
  .text-white {
    color: #fff;
  }
  .font-medium {
    font-weight: 500;
  }
  .justify-between {
    justify-content: space-between;
  }
  .items-center {
    align-items: center;
  }
  .hover:text-gray-400 {
    transition: color 0.15s ease-in-out;
  }
</style>
<header class="bg-gray-800 p-8 flex justify-between items-center">
<div class="text-white font-medium">Your Logo</div>
  <nav>
			<a href="/ThirdSample/controllers/index.php" class="text-blue hover:text-gray-400 mr-4 <?= urlIs('/ThirdSample/')?>" >Home</a>
			<a href="/ThirdSample/controllers/about.php" class="text-blue hover:text-gray-400 mr-4 <?= urlIs('/ThirdSample/about.php')?> ">About</a>
			<a href="/ThirdSample/controllers/contactus.php" class="text-blue hover:text-gray-400 mr-4 <?= urlIs('/ThirdSample/contactus.php')?> ">Contact us</a>
  	</nav>
</header>