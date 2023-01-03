<?php
include("header.php");
session_start();
if(!isset($_SESSION['id']))
{
    header("location:login.php");
}
?>
<head>
    <title>Home</title>
</head>
<table class="market-table">
              <thead class="table-head">
                <tr class="table-row table-title">
                  <th class="table-heading" style="color:white;" scope="col">#</th>
                  <th class="table-heading" style="color:white;" scope="col">Name</th>
                  <th class="table-heading" style="color:white;" scope="col">Price (USD)</th>
                  <th class="table-heading" style="color:white;" scope="col">24h %</th>
                  <th class="table-heading" style="color:white;" scope="col">Market Cap</th>
                  <th class="table-heading"></th>
                </tr>
              </thead>
              <tbody class="table-body">
                <tr class="table-row">
                  <th class="table-data rank" style="color:white;" scope="row"><span id="rank0"></span></th>
                  <td class="table-data">
                    <div class="wrapper">
                      <h3>
                        <a href="#" class="coin-name"><span id="name0"></span></a>
                      </h3>
                    </div>
                  </td>
                  <td class="table-data last-price" style="color:white;"><span id="price_usd0"></span></td>
                  <td class="table-data last-update" style="color:white;"><span id="percent_change_24h0"></span></td>
                  <td class="table-data market-cap" style="color:white;"><span id="market_cap_usd0"></span></td>
                  <td class="table-data">
                    <a href="buysell.php">
                            <button class="btn btn-outline" style="color:white;">Trade</button>
                        </a>
                  </td>
                </tr>
                <tr class="table-row">
                  <th class="table-data rank" style="color:white;" scope="row"><span id="rank1"></span></th>
                  <td class="table-data">
                    <div class="wrapper">
                      <h3>
                        <a href="#" class="coin-name"><span id="name1"></span></a>
                      </h3>
                    </div>
                  </td>
                  <td class="table-data last-price" style="color:white;"><span id="price_usd1"></span></td>
                  <td class="table-data last-update" style="color:white;"><span id="percent_change_24h1"></span></td>
                  <td class="table-data market-cap" style="color:white;"><span id="market_cap_usd1"></span></td>
                  <td class="table-data">
                    <a href="buysell.php">
                            <button class="btn btn-outline" style="color:white;">Trade</button>
                        </a>
                  </td>
                </tr>
                <tr class="table-row">
                  <th class="table-data rank" style="color:white;" scope="row"><span id="rank2"></span></th>
                  <td class="table-data">
                    <div class="wrapper">
                      <h3>
                        <a href="#" class="coin-name"><span id="name2"></span></a>
                      </h3>
                    </div>
                  </td>
                  <td class="table-data last-price" style="color:white;"><span id="price_usd2"></span></td>
                  <td class="table-data last-update" style="color:white;"><span id="percent_change_24h2"></span></td>
                  <td class="table-data market-cap" style="color:white;"><span id="market_cap_usd2"></span></td>
                  <td class="table-data">
                    <a href="buysell.php">
                            <button class="btn btn-outline" style="color:white;">Trade</button>
                        </a>
                  </td>
                </tr>
                <tr class="table-row">
                  <th class="table-data rank" style="color:white;" scope="row"><span id="rank3"></span></th>
                  <td class="table-data">
                    <div class="wrapper">
                      <h3>
                        <a href="#" class="coin-name"><span id="name3"></span></a>
                      </h3>
                    </div>
                  </td>
                  <td class="table-data last-price" style="color:white;"><span id="price_usd3"></span></td>
                  <td class="table-data last-update" style="color:white;"><span id="percent_change_24h3"></span></td>
                  <td class="table-data market-cap" style="color:white;"><span id="market_cap_usd3"></span></td>
                  <td class="table-data">
                    <a href="buysell.php">
                            <button class="btn btn-outline" style="color:white;">Trade</button>
                        </a>
                  </td>
                </tr>
                <tr class="table-row">
                  <th class="table-data rank" style="color:white;" scope="row"><span id="rank4"></span></th>
                  <td class="table-data">
                    <div class="wrapper">
                      <h3>
                        <a href="#" class="coin-name"><span id="name4"></span></a>
                      </h3>
                    </div>
                  </td>
                  <td class="table-data last-price" style="color:white;"><span id="price_usd4"></span></td>
                  <td class="table-data last-update" style="color:white;"><span id="percent_change_24h4"></span></td>
                  <td class="table-data market-cap" style="color:white;"><span id="market_cap_usd4"></span></td>
                  <td class="table-data">
                    <a href="buysell.php">
                            <button class="btn btn-outline" style="color:white;">Trade</button>
                        </a>
                  </td>
                </tr>
              </tbody>

            </table>
<!-- footer -->
<?php
include("footer.php");
?>

<script>

  async function fetchText() {
    const options = {
    method: 'GET',
    headers: {
      'X-RapidAPI-Key': '5925ef9871mshd073c7ff077618dp13a24djsn3392d764a97d',
      'X-RapidAPI-Host': 'coinlore-cryptocurrency.p.rapidapi.com'
    }
  };
    let response =  await fetch('https://coinlore-cryptocurrency.p.rapidapi.com/api/tickers/?start=0&limit=10', options).then(response => response.json())
      .then(json => {
      a0 = json.data[0]
        document.getElementById("rank0").innerHTML = a0["rank"];
        document.getElementById('name0').innerHTML = a0["name"];
        document.getElementById("percent_change_24h0").innerHTML = a0["percent_change_24h"];
        document.getElementById("market_cap_usd0").innerHTML = a0["market_cap_usd"];
        document.getElementById("price_usd0").innerHTML = a0["price_usd"];

    a1 = json.data[1]
        document.getElementById("rank1").innerHTML = a1["rank"];
        document.getElementById('name1').innerHTML = a1["name"];
        document.getElementById("percent_change_24h1").innerHTML = a1["percent_change_24h"];
        document.getElementById("market_cap_usd1").innerHTML = a1["market_cap_usd"];
        document.getElementById("price_usd1").innerHTML = a1["price_usd"];

    a2 = json.data[2]
        document.getElementById("rank2").innerHTML = a2["rank"];
        document.getElementById('name2').innerHTML = a2["name"];
        document.getElementById("percent_change_24h2").innerHTML = a2["percent_change_24h"];
        document.getElementById("market_cap_usd2").innerHTML = a2["market_cap_usd"];
        document.getElementById("price_usd2").innerHTML = a2["price_usd"];

    a3 = json.data[3]
        document.getElementById("rank3").innerHTML = a3["rank"];
        document.getElementById('name3').innerHTML = a3["name"];
        document.getElementById("percent_change_24h3").innerHTML = a3["percent_change_24h"];
        document.getElementById("market_cap_usd3").innerHTML = a3["market_cap_usd"];
        document.getElementById("price_usd3").innerHTML = a3["price_usd"];

    a4 = json.data[4]
        document.getElementById("rank4").innerHTML = a4["rank"];
        document.getElementById('name4').innerHTML = a4["name"];
        document.getElementById("percent_change_24h4").innerHTML = a4["percent_change_24h"];
        document.getElementById("market_cap_usd4").innerHTML = a4["market_cap_usd"];
        document.getElementById("price_usd4").innerHTML = a4["price_usd"];
});
}

fetchText();

</script>
