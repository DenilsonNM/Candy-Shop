<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Candy Shop en ruso</title>
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,1,0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,0,0" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://www.paypal.com/sdk/js?client-id=AejuHB3UOWOjdYUiisdJUbpZDQjoeg3Jpzf47Kqc2Qa7J6v3p4hgdfBqM8k5-fjTTTKmCcWUrXmAqy9k&currency=MXN"></script>
  <link rel="shortcut icon" href="img/Candy-icon.ico" />

</head>

<body>
  <?php
  include "cabecero_ruso.php";
  ?>
  <main class="contenedor blanco">
    <section class="sliders">
      <div class="slider">
        <ul>
          <li><img src="img/slider1.webp" alt="Slider 1"></li>
          <li><img src="img/slider2.webp" alt="Slider 2"></li>
          <li><img src="img/slider3.webp" alt="Slider 3"></li>
          <li><img src="img/slider4.webp" alt="Slider 4"></li>
        </ul>
      </div>
    </section>
    <hr>
    <h1>Наши продукты</h1>
    <div class="grid sombra">
      <?php
      require "login/conexion.php";
      $datos = "SELECT * from productos order by id ASC";
      $query = mysqli_query($conectar, $datos);

      while ($fila = mysqli_fetch_assoc($query)) {
        echo '<div class="producto sombra">';
        echo "<img class = 'producto__img' src = '/candy/login/" . $fila["ruta"] . "'><br>";
        echo '<div class="producto__informacion">';
        echo '<span class="producto__nombre "><span>' . $fila["nombre"] . "<br>";
        echo '<span class="descripcion"><span>' . $fila["descripcion"] . "<br>";
        echo '<span class="producto__precio"> $<span>' . '<span class=""><span>' . $fila["precio"];
        echo "</div>";
        echo '<a class="btn--producto" href="#">Ver</a>';
        echo '<div id="paypal-button-container"></div>';
        echo '<div id="result-message"></div>';
        echo "</div>";
      }
      ?>
      <div class="grafico grafico--dulce1 blanco"></div>
      <div class="grafico grafico--dulce2 blanco"></div>
    </div>
  </main>
  <section class="contenedor blanco">
    <div class="cupones">
      <div class="cupon">
        <img src="img/cupon1.webp" alt="Cupon 1">
      </div>
      <div class="cupon">
        <img src="img/cupon2.webp" alt="Cupon 2">
      </div>
    </div>
    <div class="promociones">
      <div class="promocion">
        <img src="img/promocion1.webp" alt="Promocion 1">
      </div>
      <div class="promocion">
        <img src="img/promocion2.webp" alt="Promocion 2">
      </div>
      <div class="promocion">
        <img src="img/promocion3.webp" alt="Promocion 3">
      </div>
    </div>
  </section>
  <?php
  include "footer_ruso.php";
  ?>

  <script src="js/app.js"></script>

  <script>
    window.paypal
      .Buttons({
        async createOrder() {
          try {
            const response = await fetch("/api/orders", {
              method: "POST",
              headers: {
                "Content-Type": "application/json",
              },
              // use the "body" param to optionally pass additional order information
              // like product ids and quantities
              body: JSON.stringify({
                cart: [{
                  id: "YOUR_PRODUCT_ID",
                  quantity: "YOUR_PRODUCT_QUANTITY",
                }, ],
              }),
            });

            const orderData = await response.json();

            if (orderData.id) {
              return orderData.id;
            } else {
              const errorDetail = orderData?.details?.[0];
              const errorMessage = errorDetail ?
                `${errorDetail.issue} ${errorDetail.description} (${orderData.debug_id})` :
                JSON.stringify(orderData);

              throw new Error(errorMessage);
            }
          } catch (error) {
            console.error(error);
            resultMessage(`Could not initiate PayPal Checkout...<br><br>${error}`);
          }
        },
        async onApprove(data, actions) {
          try {
            const response = await fetch(`/api/orders/${data.orderID}/capture`, {
              method: "POST",
              headers: {
                "Content-Type": "application/json",
              },
            });

            const orderData = await response.json();
            // Three cases to handle:
            //   (1) Recoverable INSTRUMENT_DECLINED -> call actions.restart()
            //   (2) Other non-recoverable errors -> Show a failure message
            //   (3) Successful transaction -> Show confirmation or thank you message

            const errorDetail = orderData?.details?.[0];

            if (errorDetail?.issue === "INSTRUMENT_DECLINED") {
              // (1) Recoverable INSTRUMENT_DECLINED -> call actions.restart()
              // recoverable state, per https://developer.paypal.com/docs/checkout/standard/customize/handle-funding-failures/
              return actions.restart();
            } else if (errorDetail) {
              // (2) Other non-recoverable errors -> Show a failure message
              throw new Error(`${errorDetail.description} (${orderData.debug_id})`);
            } else if (!orderData.purchase_units) {
              throw new Error(JSON.stringify(orderData));
            } else {
              // (3) Successful transaction -> Show confirmation or thank you message
              // Or go to another URL:  actions.redirect('thank_you.html');
              const transaction =
                orderData?.purchase_units?.[0]?.payments?.captures?.[0] ||
                orderData?.purchase_units?.[0]?.payments?.authorizations?.[0];
              resultMessage(
                `Transaction ${transaction.status}: ${transaction.id}<br><br>See console for all available details`,
              );
              console.log(
                "Capture result",
                orderData,
                JSON.stringify(orderData, null, 2),
              );
            }
          } catch (error) {
            console.error(error);
            resultMessage(
              `Sorry, your transaction could not be processed...<br><br>${error}`,
            );
          }
        },
      })
      .render("#paypal-button-container");

    // Example function to show a result to the user. Your site's UI library can be used instead.
    function resultMessage(message) {
      const container = document.querySelector("#result-message");
      container.innerHTML = message;
    }
  </script>

  <script>
    import express from "express";
    import fetch from "node-fetch";
    import "dotenv/config";
    import path from "path";

    const {
      PAYPAL_CLIENT_ID,
      PAYPAL_CLIENT_SECRET,
      PORT = 8888
    } = process.env;
    const base = "https://api-m.sandbox.paypal.com";
    const app = express();

    // host static files
    app.use(express.static("client"));

    // parse post params sent in body in json format
    app.use(express.json());

    /**
     * Generate an OAuth 2.0 access token for authenticating with PayPal REST APIs.
     * @see https://developer.paypal.com/api/rest/authentication/
     */
    const generateAccessToken = async () => {
      try {
        if (!PAYPAL_CLIENT_ID || !PAYPAL_CLIENT_SECRET) {
          throw new Error("MISSING_API_CREDENTIALS");
        }
        const auth = Buffer.from(
          PAYPAL_CLIENT_ID + ":" + PAYPAL_CLIENT_SECRET,
        ).toString("base64");
        const response = await fetch(`${base}/v1/oauth2/token`, {
          method: "POST",
          body: "grant_type=client_credentials",
          headers: {
            Authorization: `Basic ${auth}`,
          },
        });

        const data = await response.json();
        return data.access_token;
      } catch (error) {
        console.error("Failed to generate Access Token:", error);
      }
    };

    /**
     * Create an order to start the transaction.
     * @see https://developer.paypal.com/docs/api/orders/v2/#orders_create
     */
    const createOrder = async (cart) => {
      // use the cart information passed from the front-end to calculate the purchase unit details
      console.log(
        "shopping cart information passed from the frontend createOrder() callback:",
        cart,
      );

      const accessToken = await generateAccessToken();
      const url = `${base}/v2/checkout/orders`;
      const payload = {
        intent: "CAPTURE",
        purchase_units: [{
          amount: {
            currency_code: "MXN",
            value: "110.00",
          },
        }, ],
      };

      const response = await fetch(url, {
        headers: {
          "Content-Type": "application/json",
          Authorization: `Bearer ${accessToken}`,
          // Uncomment one of these to force an error for negative testing (in sandbox mode only). Documentation:
          // https://developer.paypal.com/tools/sandbox/negative-testing/request-headers/
          // "PayPal-Mock-Response": '{"mock_application_codes": "MISSING_REQUIRED_PARAMETER"}'
          // "PayPal-Mock-Response": '{"mock_application_codes": "PERMISSION_DENIED"}'
          // "PayPal-Mock-Response": '{"mock_application_codes": "INTERNAL_SERVER_ERROR"}'
        },
        method: "POST",
        body: JSON.stringify(payload),
      });

      return handleResponse(response);
    };

    /**
     * Capture payment for the created order to complete the transaction.
     * @see https://developer.paypal.com/docs/api/orders/v2/#orders_capture
     */
    const captureOrder = async (orderID) => {
      const accessToken = await generateAccessToken();
      const url = `${base}/v2/checkout/orders/${orderID}/capture`;

      const response = await fetch(url, {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
          Authorization: `Bearer ${accessToken}`,
          // Uncomment one of these to force an error for negative testing (in sandbox mode only). Documentation:
          // https://developer.paypal.com/tools/sandbox/negative-testing/request-headers/
          // "PayPal-Mock-Response": '{"mock_application_codes": "INSTRUMENT_DECLINED"}'
          // "PayPal-Mock-Response": '{"mock_application_codes": "TRANSACTION_REFUSED"}'
          // "PayPal-Mock-Response": '{"mock_application_codes": "INTERNAL_SERVER_ERROR"}'
        },
      });

      return handleResponse(response);
    };

    async function handleResponse(response) {
      try {
        const jsonResponse = await response.json();
        return {
          jsonResponse,
          httpStatusCode: response.status,
        };
      } catch (err) {
        const errorMessage = await response.text();
        throw new Error(errorMessage);
      }
    }

    app.post("/api/orders", async (req, res) => {
      try {
        // use the cart information passed from the front-end to calculate the order amount detals
        const {
          cart
        } = req.body;
        const {
          jsonResponse,
          httpStatusCode
        } = await createOrder(cart);
        res.status(httpStatusCode).json(jsonResponse);
      } catch (error) {
        console.error("Failed to create order:", error);
        res.status(500).json({
          error: "Failed to create order."
        });
      }
    });

    app.post("/api/orders/:orderID/capture", async (req, res) => {
      try {
        const {
          orderID
        } = req.params;
        const {
          jsonResponse,
          httpStatusCode
        } = await captureOrder(orderID);
        res.status(httpStatusCode).json(jsonResponse);
      } catch (error) {
        console.error("Failed to create order:", error);
        res.status(500).json({
          error: "Failed to capture order."
        });
      }
    });

    // serve index.html
    app.get("/", (req, res) => {
      res.sendFile(path.resolve("./client/checkout.html"));
    });

    app.listen(PORT, () => {
      console.log(`Node server listening at http://localhost:${PORT}/`);
    });
  </script>

</body>

</html>