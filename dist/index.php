<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Site Template</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/main.css">
  <script type="">

    const urlParams = new URLSearchParams("https://www.test.com/page/test/?test1=t189gk4&mykey=j318gn419&test3=12345");
		// const url = "https://www.test.com/getKeys/";
		// const myKey = urlParams.get('mykey');
		// let xhr = new XMLHttpRequest();
		// let post = JSON.stringify(postObj);

		// if (myKey){
		// 	console.log(myKey)
		// 	console.log(true)
		// 	// post myKey
		// }
		
	// 	if (urlParams.has("mykey2")) {
	// 		const mykeyValue = urlParams.get("mykey");
	// 		const data = { keytest: mykeyValue };
	// 		const options = {
	// 			method: "POST",
	// 			headers: {
	// 				"Content-Type": "application/json"
	// 			},
  //  		 	body: JSON.stringify(data)
  // 		};
	// 		fetch("https://www.test.com/getKeys/", options)
	// 			.then(response => response.json())
	// 			.then(data => console.log(data))
	// 			.catch(error => console.error(error));
	// 	} else {
	// 		const test1Value = urlParams.get("test1").substring(0, 6);
	// 		const test3Value = urlParams.get("test3").substring(0, 6);
	// 		const parameters = `${test1Value}${test3Value}`;
	// 		executeParameters(parameters);
	// 	}

	// function executeParameters(parameters) {
	// 	// Do something with the parameters
	// 	console.log(`Executing parameters: ${parameters}`);
	// }

	</script>
  <script>
  if (document.getElementById("abc")) {
		console.log(true);
    const title = document.getElementById("abc").title;
    alert(title);
  } else {
		console.log(false);
    const elements = document.getElementsByClassName("myclass");
    for (let i = 0; i < elements.length; i++) {
      const title = elements[i].title;
      console.log(title);
    }
  }
  </script>
</head>

<body>
  <?php include("components/header/header.php"); ?>
  <main id="main">
    <div class="container">
      <h1 >Hello World</h1>
			<div id="abc" title="abc" class="myclass">
				myclass
			</div>
    </div>
  </main>
  <?php include("components/footer/footer.php"); ?>
</body>

</html>