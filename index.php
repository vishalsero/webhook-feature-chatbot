<?php 

$method = $_SERVER['REQUEST_METHOD'];

// Process only when method is POST
if($method == 'POST'){
	$requestBody = file_get_contents('php://input');
	$json = json_decode($requestBody);

	$text = $json->result->parameters->text;

	switch ($text) {
		case 'Features':
				$speech = "About Academia ERP-
Academia by Serosoft is an award-winning Student Information System powering over 200 institutions across the globe. The robust, feature-rich, analytics-equipped, user-friendly Academia - built on a cutting-edge and flexible architecture - enables educational institutions to automate & streamline their functions and processes for both learning and administration, from prospecting to graduation. It boasts of tremendous capability to handle multi-center operations as well.
There are competing educational software available on the market which may seem similar to our solution, but the majority of these are web-based applications with limited functionality, reporting, and non-scalable in future. In addition, they all require extra customization in the future to map with changing client processes. Moreover, there are problems with software integration with their system and adaptability to their requirements.
Academia ERP is a comprehensive, scalable, highly reliable, secure and built on the latest technology stack to manage every aspect of the education process and deliver the best possible user experience to educational institutions. Academia is highly configurable, scalable, feature rich, mobile ready and comes with extensive reporting capability from the start to serve the needs of a top-class Universities/Colleges/Schools. It will make processes efficient, optimize your resources, reduce your operational risk and focus on teacher & student ";

			break;

		case 'features':
				$speech = "About Academia ERP-
Academia by Serosoft is an award-winning Student Information System powering over 200 institutions across the globe. The robust, feature-rich, analytics-equipped, user-friendly Academia - built on a cutting-edge and flexible architecture - enables educational institutions to automate & streamline their functions and processes for both learning and administration, from prospecting to graduation. It boasts of tremendous capability to handle multi-center operations as well.
There are competing educational software available on the market which may seem similar to our solution, but the majority of these are web-based applications with limited functionality, reporting, and non-scalable in future. In addition, they all require extra customization in the future to map with changing client processes. Moreover, there are problems with software integration with their system and adaptability to their requirements.
Academia ERP is a comprehensive, scalable, highly reliable, secure and built on the latest technology stack to manage every aspect of the education process and deliver the best possible user experience to educational institutions. Academia is highly configurable, scalable, feature rich, mobile ready and comes with extensive reporting capability from the start to serve the needs of a top-class Universities/Colleges/Schools. It will make processes efficient, optimize your resources, reduce your operational risk and focus on teacher & student ";

			break;

		case 'features list':
				$speech = "About Academia ERP-
Academia by Serosoft is an award-winning Student Information System powering over 200 institutions across the globe. The robust, feature-rich, analytics-equipped, user-friendly Academia - built on a cutting-edge and flexible architecture - enables educational institutions to automate & streamline their functions and processes for both learning and administration, from prospecting to graduation. It boasts of tremendous capability to handle multi-center operations as well.
There are competing educational software available on the market which may seem similar to our solution, but the majority of these are web-based applications with limited functionality, reporting, and non-scalable in future. In addition, they all require extra customization in the future to map with changing client processes. Moreover, there are problems with software integration with their system and adaptability to their requirements.
Academia ERP is a comprehensive, scalable, highly reliable, secure and built on the latest technology stack to manage every aspect of the education process and deliver the best possible user experience to educational institutions. Academia is highly configurable, scalable, feature rich, mobile ready and comes with extensive reporting capability from the start to serve the needs of a top-class Universities/Colleges/Schools. It will make processes efficient, optimize your resources, reduce your operational risk and focus on teacher & student ";

			break;
		case 'What are the features that differentiate you from other ERPs ?'
				$speech = "About Academia ERP-
Academia by Serosoft is an award-winning Student Information System powering over 200 institutions across the globe. The robust, feature-rich, analytics-equipped, user-friendly Academia - built on a cutting-edge and flexible architecture - enables educational institutions to automate & streamline their functions and processes for both learning and administration, from prospecting to graduation. It boasts of tremendous capability to handle multi-center operations as well.
There are competing educational software available on the market which may seem similar to our solution, but the majority of these are web-based applications with limited functionality, reporting, and non-scalable in future. In addition, they all require extra customization in the future to map with changing client processes. Moreover, there are problems with software integration with their system and adaptability to their requirements.
Academia ERP is a comprehensive, scalable, highly reliable, secure and built on the latest technology stack to manage every aspect of the education process and deliver the best possible user experience to educational institutions. Academia is highly configurable, scalable, feature rich, mobile ready and comes with extensive reporting capability from the start to serve the needs of a top-class Universities/Colleges/Schools. It will make processes efficient, optimize your resources, reduce your operational risk and focus on teacher & student ";

		default:
			$speech = "Sorry, I didnt get that. Please ask me something else.";
			break;
	}
	
	var textResponse = $speech; 
	textResponse = textResponse.replace(/\\n/g, '\n');

	$response = new \stdClass();
	$response->result->fulfillment->speech = textResponse;
	$response->displayText = $speech;
	$response->source = "webhook";
	
	
	echo json_encode($response);
}
else
{
	echo "Method not allowed";
}

?>