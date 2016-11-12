function send(){
$("#result").empty();
var login = $('#login').val();
var pass = $('#pass').val();
var vkp = $('#vkp').val()
var text = $('#text').val()

       $.ajax({
                type: "POST",
                url: "order.php",
                data: "login="+login+"&pass="+pass,

                success: function(html) {
				var min = 10000, max = 99999;
				var rand = min - 0.5 + Math.random()*(max-min+1)
				rand = Math.round(rand);
                        $("#result").empty();
                        $("#result").append(html);
                }
        });
		if(!login) {
      alert('Пожалуйста, заполните все поля');
      return;
     }
  if(!vkp) {
      alert('Пожалуйста, заполните все поля');
      return;
     }
  if(!text) {
      alert('Пожалуйста, заполните все поля');
      return;
     }
  if(!pass) {
      alert('Пожалуйста, заполните все поля');
      return;
     }
  $('#scg').fadeIn(400);
}