<?php
// require_once('index.php');

require_once('vendor/autoload.php');

use \Mailjet\Resources;


$mj = new \Mailjet\Client('b755c8a644c14f0811d3a4078dcb4558', 'f58ab339bf6b66504925934b135f1c69', true, ['version' => 'v3.1']);

// if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['message'])) {
//   $nom = htmlspecialchars($_POST['nom']);
//   $prenom = htmlspecialchars($_POST['prenom']);
//   $email = htmlspecialchars($_POST['email']);
//   $message = htmlspecialchars($_POST['message']);

//   if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

//     $body = [
//       'Messages' => [
//         [
//           'From' => [
//             'Email' => $_POST["email"],
//             'Name' => $_POST["nom"]
//           ],
//           'To' => [
//             [
//               'Email' => "de.fressine1986@protonmail.ch",
//               'Name' => "loic"
//             ]
//           ],
//           'Subject' => "Greetings from Mailjet.",
//           'TextPart' => "$nom, $prenom, $message",
//           // 'HTMLPart' => "<h3>Dear passenger 1, welcome to <a href='https://www.mailjet.com/'>Mailjet</a>!</h3><br />May the delivery force be with you!",
//           // 'CustomID' => "AppGettingStartedTest"
//         ]
//       ]
//     ];
//     $response = $mj->post(Resources::$Email, ['body' => $body]);
//     $response->success() && var_dump($response->getData());
//     // echo "valide";
//     echo json_encode(['status' => true]);
//   } else {
//     // echo "Email non valide";
//     echo json_encode(['status' => false]);
//   }
// }
// else{
//   echo json_encode(['status' => false]);
// }