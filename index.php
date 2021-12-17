<?php 

$myPar = " “Geralt di Rivia. Shani di Medicina. E questa civetta che è volata così abilmente sulle mie tracce non è affatto una civetta. È Filippa Eilhart del Consiglio dei Maghi, al servizio di re Vizimir, vanto della corte di Tretogor. Purtroppo, qui abbiamo solo una sedia.»
«Basta e avanza.» La maga rubò il posto al trovatore e girò uno sguardo languido sui presenti, lasciandolo indugiare su Shani.
La studentessa, con gran stupore di Ranuncolo, avvampò di colpo.
«In realtà, ciò per cui sono venuta riguarda soltanto Geralt di Rivia», cominciò Filippa dopo un breve istante. «Tuttavia mi rendo conto che mettere alla porta qualcuno sarebbe sgarbato, perciò...»
«Posso andare?» chiese Shani in tono incerto. «No, non puoi. Nessuno può andarsene finché la situazione non sarà chiarita. Dico bene, signora Eilhart?» borbottò Geralt.
La maga sorrise. «Filippa, per te. Lasciamo stare i convenevoli. Nessuno è obbligato a uscire di qui, non mi disturba la compagnia di nessuno di voi. Al massimo mi sorprende, ma che volete, la vita è una catena ininterrotta di sorprese... Come dice una mia vecchia conoscenza... una nostra vecchia conoscenza, Geralt. ” ";

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>censored</title>
</head>
<body>
   <h3>Estratto da "Il sangue degli elfi"</h3>
   <p>di Andrzej Sapkowski</p>
   <div>... <?php echo $myPar;?> ...</div>
   <div><br></div>
   
   <!-- censored -->
   <h3>censurato:</h3>
   <div>... <?php echo str_replace($_GET['censored'],"***", $myPar);?> ...</div>
</body>
</html>