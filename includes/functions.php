<?php
//fonction pour les modules == base
function testeIfGamePlayed($terminer,$griser, $debut, $id, $token)
{
  global $db;
  $result=$db->query("SELECT * FROM lecon");
  $result->execute();
  $table=$result->fetchAll();
  //var_dump($_SESSION);
   if(is_logged_in())//si l'user es connecté
   {
      if(!empty($_SESSION["lecon_".$id])){// si lecon n'est pas terminer
          return '<div class="panel panel-warning panel-footer" id="commencer">
                                 <a href="'.$debut.'/'.$id.'">Rejouer</a>
                          </div>';
      }else{
        //si lecon terminer
          return '<div class="panel panel-warning panel-footer" id="commencer">
                                 <a href="'.$debut.'/'.$id.'">Commencer</a>
                          </div>';

      }

   }else{//n'est pas connecté
    //si la table griser == 1 on active le grisage
        return '<div class="panel panel-warning panel-footer" id="commencer">
                                 <a href="'.$debut.'/'.$id.'">Commencer</a>
                          </div>';
     
  }

}


function initialArray($taille)
{
  $result="";
  $array=array(27=>1,28=>2, 29=>3, 30=>4, 31=>5, 32=>6, 33=>7, 34=>8, 35=>9, 36=>10,
        0=>"a", 1=>"b", 2=>"c", 3=>"d", 4=>"e", 6=>"f", 7=>"g", 8=>"h", 9=>"i",10=>"j", 11=>"k", 12=>"l", 13=>"m", 14=>"n", 15=>"o", 16=>"p", 17=>"q", 18=>"r",
         19=>"s", 20=>"t", 21=>"u", 22=>"v", 23=>"w", 24=>"x", 25=>"y", 26=>"z",
         37=>"A", 38=>"B", 39=>"C", 40=>"D", 41=>"E", 42=>"F", 43=>"G", 44=>"H", 45=>"I", 46=>"J", 47=>"K", 48=>"L", 49=>"M", 50=>"N", 51=>"O", 52=>"P", 53=>"Q", 54=>"r",
         55=>"S", 56=>"T", 57=>"U", 58=>"V", 59=>"W", 60=>"X", 61=>"Y", 62=>"Z"
         );
  
  for($i=0;$i<$taille;$i++)
  {
    $result.=$array[rand(13,count($array)-1)];
  }
  return $result;
}



/* FONCTION POUR EGBOASOUKLOU*/
/*Fonction encode utf-8*/
 function url_custom_encode($titre) {
   $titre = htmlspecialchars($titre);
   $find = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'ß', 'à', 'á', 'â', 'ã', 'ä', 'å', 'æ', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', 'Œ', 'œ', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', 'Š', 'š', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', 'Ÿ', '?', '?', '?', '?', 'Ž', 'ž', '?', 'ƒ', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?');
     $replace = array('A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'D', 'N', 'O', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 's', 'a', 'a', 'a', 'a', 'a', 'a', 'ae', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'D', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'IJ', 'ij', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'l', 'l', 'N', 'n', 'N', 'n', 'N', 'n', 'n', 'O', 'o', 'O', 'o', 'O', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'S', 's', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z', 'z', 'Z', 'z', 's', 'f', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'A', 'a', 'AE', 'ae', 'O', 'o', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?');
     $titre = str_replace($find, $replace, $titre);
   $titre = strtolower($titre);
   $mots = preg_split('/[^A-Z^a-z^0-9]+/', $titre);
   $encoded = "";
   foreach($mots as $mot) {
      if(strlen($mot) >= 3 OR str_replace(['0','1','2','3','4','5','6','7','8','9'], '', $mot) != $mot) {
         $encoded .= $mot.'-';
      }
   }
   $encoded = substr($encoded, 0, -1);
   return $encoded;
}


/*fin egboasoukou*/
//function to sanitize an user input
//fonction d'echapement de code
if (!function_exists('e')) {

	function e($string){

       if($string){
           return htmlspecialchars($string);
       }
	}
}

//Verifie si une demande a ete envoye
function if_a_friend_request_has_already_been_sent($id1, $id2){
  global $db;
  $q = $db->prepare("SELECT user_id1, user_id2, status From friends_relationships
       WHERE (user_id1 = :user_id1 AND user_id2 = :user_id2)
       OR (user_id1 = :user_id2 AND user_id2 = :user_id1)");
  $q->execute([
    'user_id1' => $id1,
    'user_id2' => $id2
    ]);

  $count = $q->rowCount();
  $q->closeCursor();
  
  return (bool) $count;
}

//affichaage du nombre d'amis
function count_ami(){
  global $db;
  $q = $db->prepare("SELECT status FROM friends_relationships
   WHERE (user_id1 = :user_connected  OR user_id2 = :user_connected)
   AND status = '1'");
  $q->execute([
    'user_connected' => $_GET['id']
    ]);

  $count = $q->rowCount();
  $q->closeCursor();
  
  return $count;
}
//cell count funtion
//retourne le nombre d'enregistrement trouver en respectant une certaine condition
if (! function_exists('cell_count')) {

  function cell_count($table, $field_name, $field_value){

      global $db;

      $query = $db->prepare("SELECT * FROM $table WHERE $field_name = ?");
      $query->execute([$field_value]);

      return $query->rowCount();
  }
}

//funtion remember_me
if (! function_exists('remember_me')) {

  function remember_me($user_id){

    global $db;

  //gener un token de mamière aleatoire
  $token = openssl_random_pseudo_bytes(24);
    //generer un selecteur de manirere aleatoire
    // et s'assurer que ce dernier est unique
  do{
     $selector = openssl_random_pseudo_bytes(9);
   }while (cell_count('auth_tokens', 'selector', $selector) > 0);
    //sauvegarder ces infos (user_id, expires(14 jours), token(hashed))
    //en bdd
   $query = $db->prepare("INSERT INTO auth_tokens(expires, selector, user_id, token)
                         VALUES (DATE_ADD(NOW(), INTERVAL 14 DAY), :selector, :user_id, :token)");
   $query->execute([
          'selector' => $selector,
          'user_id' => $user_id,
          'token' => hash('sha256', $token)
    ]);
    //créer un cookie 'auth'(14 jrs expires) httponly=>true
    //contenu: base64_encode(selector).':'.base64_encode(token)
   setcookie('auth',
    base64_encode($selector).':'.base64_encode($token),
    time()+1209600,
    null,
    null,
    false,
    true
    );
  }
}
//auto login funtion
if (! function_exists('auto_login')) {

  function auto_login(){
    global $db;
      //on verifie d'abord si le cookie auth exists
       if (! empty($_COOKIE['auth'])) {
            $split = explode(':', $_COOKIE['auth']);
            if(count($split) !== 2){
                return false;
            }

       //on recupère via ce cookie le $selector, le $token
            list($selector, $token) = $split;

            $query = $db->prepare('SELECT auth_tokens.token, auth_tokens.user_id,
                                   members.id, members.name, members.avatar, members.email
                                   FROM auth_tokens
                                   LEFT JOIN members
                                   ON auth_tokens.user_id = members.id
                                   WHERE selector = ? AND expires >= CURDATE()');
            $query->execute([base64_decode($selector)]);

            $data = $query->fetch(PDO::FETCH_OBJ);

            if($data){
                if(hash_equals($data->token, hash('sha256', base64_decode($token)))){
                  session_regenerate_id(true);

                  $_SESSION['user_id'] = $data->user_id;
                  $_SESSION['name']  = $data->name;
                  $_SESSION['avatar']  = $data->avatar;
                  $_SESSION['email']   = $data->email;

                  return true;
                }
            }
       }

    return false;
  }
}
//fonction de redirection amical
//function to redirect the member intention page
if (! function_exists('redirect_intent_or')) {

  function redirect_intent_or($default_url){

       if($_SESSION['forwarding_url']){
          $url = $_SESSION['forwarding_url'];
       }else{
        $url = $default_url;
       }

    $_SESSION['forwarding_url'] = null;
    redirect('$url');
  }
}


//check if an user is connected
if (! function_exists('is_logged_in')) {
  function is_logged_in(){
    return isset($_SESSION['user_id']) || isset($_SESSION['name']);
  }
}

//get a session value by key
if (! function_exists('get_session')) {

  function get_session($key){

       if($key){
            return !empty($_SESSION[$key])
             ? e($_SESSION[$key])
            : null;
       }
  }
}

//hash password with blowfish algorithm
if (! function_exists('bcrypt_hash_password')) {

  function bcrypt_hash_password($value, $options = array()){

       $cost = isset($options['rounds']) ? $options['rounds'] : 10;

       $hash = password_hash($value, PASSWORD_BCRYPT, array('cost' => $cost));

       if ($hash === false) {
         throw new Exception("Brcrypt hash pas supporté.");

       }
       return $hash;
  }
}

//Bcrypt verify password
if(! function_exists('bcrypt_verify_password')){
  function bcrypt_verify_password($value, $hashedValue){
    return password_verify($value, $hashedValue);
  }
}

//get avatar url
 if (!function_exists('get_avatar_url')) {
    function get_avatar_url($email){
      return "http://gravatar.com/avatar/".md5(strtolower(trim(e($email))));
    }
 }


//find an user by his id
 //retrouver un membre grace à son Id
if (! function_exists('find_user_by_id')) {

  function find_user_by_id($id){
      global $db;

     $query = $db->prepare('SELECT id, name, email, city, country, sex, twitter, github, available_for_hiring, bio,avatar FROM members WHERE id = ?');
     $query->execute([$id]);

     $data = $query->fetch(PDO::FETCH_OBJ);

     $query->closeCursor();

     return $data;
  }
}


//la fonction "n'est pas vide" verifie si les champs ont été remplis.
if (! function_exists('not_empty')) {

	function not_empty($fields = []){

       if (count($fields) != 0) {
       	foreach ($fields as $field ) {
       		if (empty($_POST[$field]) || trim($_POST[$field]) == "") {
       			return false;
       		}
       	}
       	return true;
       }
	}
}

//the functiun that verify if a given email and pseudo are not always in use
//la fonction l'élément est "déja utilisé" elle verifie si les emails et pseudo ne sont pas deja utilisé par d'autres membres.
if (!function_exists('is_already_in_use')) {
	function is_already_in_use($field, $value, $table){
		global $db;

		$q = $db->prepare("SELECT id FROM $table WHERE $field = ?");
		$q->execute([$value]);

		$count = $q->rowCount();

		$q->closeCursor();

		return $count;
	}
}

function comparaison($question, $reponse, $table){
    global $db;

    $q = $db->prepare("SELECT donne.question, donne.response FROM $table WHERE $field = ?");
    $q->execute([$field]);

    $data = $query->fetch(PDO::FETCH_OBJ);

     $query->closeCursor();

     return $data;
  }

//the function display the flash messages
//la fonction qui affiche les messages flash
if (!function_exists('set_flash')) {
    	function set_flash($message, $type = 'info'){
    		$_SESSION['notification']['message'] = $message;
    		$_SESSION['notification']['type'] = $type;
    	}
    }

//the function that redirect to a given link
//la function pour redirger les membres à un liens donné
 if (! function_exists('redirect')) {
 	function redirect($page){
 		header('location: ' .$page);
 		exit();
 	}
 }

//function save the input data in a session
//fonction qui enregistre les informations entrées en session
if (! function_exists('save_input_data')) {
  function save_input_data(){
    foreach ($_POST as $key => $value) {
      if (strpos($key, 'password') === false) {

          $_SESSION['input'][$key] = $value;
      }

    }
  }
 }

//function to get the sessions information(from save_input_data function)
//fonction qui recupère les information garder en session(depuis save_input_data)
 if (! function_exists('get_input')) {

       function get_input($key){

    return !empty($_SESSION['input'][$key])

    ? e($_SESSION['input'][$key])
    : null;
  }
}

//function to clear the input datas
//function pour effacer les infos entrées
  if(!function_exists('clear_input_data')) {

      function clear_input_data(){

        if(isset($_SESSION['input'])) {

           $_SESSION['input'] = [];
        }
      }
  }
