async function getResponse()
{
    const response = await fetch('http://wardrobe.com/products/ApiProducts');
    let products = await response.json();
    let img = document.getElementById('img');
    let desc = document.getElementById('desc');

    for (let key in products) {
        img.innerHTML += `
                        <div class = "col-md-6" id ="img" style="margin: 20px;">
                            <img style="width: 600px;" src = "${products[key].image}" alt = ""/>
                        </div>
                        `
        desc.innerHTML += `
                        <div id="desc">
                             <div style = "margin-top: 300px; margin-bottom: 550px; padding-right: 50px;" >
                                ${products[key].name}<br>
                                <div style = "color: dimgrey;">${products[key].description}<br>
                                    ${products[key].price} грн<br></div>
                                    <div>
                                        <button type = "button" style = "width: 100px; 
                                        height: 40px; border: 1px;">
                                            <span style = "vertical-align: inherit;">Додати в кошик</span>
                                        </button>
                                    </div>
                                </div>
                        </div >
                        `
    }
}
getResponse();
