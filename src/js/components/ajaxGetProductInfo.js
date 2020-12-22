

const ajaxGetProductInfo = (item) =>{
    let productID = item.getAttribute('data-product');
    return fetch(`${apiObject.homeurl}/wp-json/get-products/search`,{
        method: 'POST',
        mode:    'cors',
        headers: {
            'Content-Type': 'application/json',  // sent request
            'Accept':       'application/json'   // expected data sent back
        },
        body: JSON.stringify({
            'id': productID,
        })
    })
    .then(response => response.json())
    .then(data => {
        return data.data
    })
}

export default ajaxGetProductInfo