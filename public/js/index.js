

ItemArray = [
    { id: 1, tag: 'un', name: 'Original Prusa I3 MK3S', price: 765, incart: 0, src : 'images/765.jpg' },
    { id: 2, tag:'deux',name: 'f170', price: 4500, incart: 0, src : 'images/4500.jpg' },
    { id: 3, tag: 'trois',name: 'Imprimante 3D Zortrax M200 Plus', price: 2149, incart: 0, src : 'images/2149.jpg' },
    { id: 4,  tag: 'quatre',name: 'Flashforge Creator', price: 940, incart: 0, src : 'images/940.jpg' },
    { id: 5, tag: 'cinq', name: 'Dagoma Disco Ultimate', price: 499, incart: 0, src : 'images/bibi.jpg' },
    { id: 6,tag: 'six', name: 'Labists 3d printer', price: 558, incart: 0, src : 'images/558.jpg' },
    { id: 7, tag: 'sept',name: 'Futur of the past', price: 2500, incart: 0, src : 'images/2500.jpg' },
];





function test() {

    let cookie = getCookie("cookie");

    if ( cookie != "true" ) {
        let div = document.createElement('div')
        div.setAttribute('class', 'cookie')
        div.setAttribute('id', 'cookie')
        document.getElementById('main').appendChild(div)
        document.getElementById('cookie').innerHTML = "This site uses cookies to offer you the best service. By continuing your navigation, you accept the use of cookies."
        let create1 = document.createElement('button')
        create1.textContent = 'Accept'
        create1.onclick = function() {
            create('cookie','true','365' )
            this.parentElement.style.display = 'none';
        }

        let create2 = document.createElement('button')
        create2.textContent = 'Dismiss'
        create2.onclick = function() {
            this.parentElement.style.display = 'none';
        }
        document.getElementById('cookie').appendChild(create1)
        document.getElementById('cookie').appendChild(create2)

    }
}

function create(name, value, exp) {

    let date = new Date()
    date.setTime(date.getTime() + (exp*24*60*60*1000));
    let expe = "expires=" + date.toUTCString();

    document.cookie = name + "=" + value + ";" + expe + ";path=/";
}

function getCookie(name) {

    let CookieArray = document.cookie.split(";");

    for( let loop = 0; loop < CookieArray.length; loop = loop + 1) {
        let cookiePair = CookieArray[loop].split("=");

        if(name == cookiePair[0].trim()) {

            return decodeURIComponent(cookiePair[1]);
        }
    }

    return "null";
}

function Step1() {

    let carts = document.querySelectorAll('.add')
    for (let i=0; i< carts.length; i++) {
        carts[i].addEventListener('click', function() {  TotalProduct(ItemArray[i]) , totalCost(ItemArray[i]) })

    }


    let learn = document.querySelectorAll('.learnmore')
    for (let i=0; i< learn.length; i++) {
        learn[i].addEventListener('click', function() { localStorage.setItem('current_view', i)  })

    }

}

function LoadTotalItem() {
    let totalproduct = localStorage.getItem('totalproduct')
    if ( totalproduct ) {
        document.getElementById('vignette').textContent = totalproduct
    }
}

function TotalProduct(item) {

    let totalproduct = localStorage.getItem('totalproduct')
    totalproduct = parseInt(totalproduct)

    if ( totalproduct ) {
        localStorage.setItem('totalproduct', totalproduct + 1)
        document.getElementById('vignette').textContent =  1 + totalproduct
    } else {
        localStorage.setItem('totalproduct', 1)
        document.getElementById('vignette').textContent =  1
    }

    AddItemLocal(item)
    GetRemove(item)
}


function AddItemLocal(item) {

    let cart = localStorage.getItem('item')
    cart = JSON.parse(cart)
    if ( cart != null) {
        if ( cart[item.tag] == undefined ) {
            cart = {
                ...cart,
                [item.tag]: item
            }
        }
        cart[item.tag].incart += 1
    } else {
        item.incart =  1
        cart = {
            [item.tag]: item
        }
    }
    localStorage.setItem('item', JSON.stringify(cart))
}

function totalCost(item) {

    let existing = localStorage.getItem('totalCost')


    if ( existing != null ) {
        existing = parseInt(existing)
        localStorage.setItem('totalCost', existing + item.price)
    } else {
        localStorage.setItem('totalCost', item.price)
    }
}

function Display() {

    let item = localStorage.getItem('item')
    item = JSON.parse(item)
    let table = document.getElementById('panier')

    if ( item ) {
        table.innerHTML = ''
        Object.values(item).map(Items => {
            table.innerHTML += `
            <tr>
                <td><img class="itemcart" src="../${Items.src}"></td>
                <td>${Items.name}</td>
                <td>${Items.incart}</td>
                <td>${Items.price * Items.incart } $ </td>
                <td><button class="remove" id="${Items.tag}" onclick="GetRemove(this.id)"> Remove </button></td>
            </tr>

            `
        })

        let total = document.getElementById('total')
        let gettotal = localStorage.getItem('totalCost')
        total.innerText = ` Total : ${gettotal} $`
    }
}

function GetRemove(id) {

    let item = JSON.parse(localStorage.getItem('item'))
    let total = parseInt(localStorage.getItem('totalCost'))
    let count = parseInt(localStorage.getItem('totalproduct'))

    // this is the only way I found to do this

    if (id == 'un') {
        count = count - item.un.incart
        localStorage.setItem('totalproduct', count)
        total = total - (item.un.price * item.un.incart)
        localStorage.setItem('totalCost', total)
        delete(item.un)
        location.reload()
    } else if (id == 'deux') {
        count = count - item.deux.incart
        localStorage.setItem('totalproduct', count)
        total = total - (item.deux.price * item.deux.incart)
        localStorage.setItem('totalCost', total)
        delete(item.deux)
        location.reload()
    } else if (id == 'trois') {
        count = count - item.trois.incart
        localStorage.setItem('totalproduct', count)
        total = total - (item.trois.price * item.trois.incart)
        localStorage.setItem('totalCost', total)
        delete(item.trois)
        location.reload()
    } else if (id == 'quatre') {
        count = count - item.quatre.incart
        localStorage.setItem('totalproduct', count)
        total = total - (item.quatre.price * item.quatre.incart)
        localStorage.setItem('totalCost', total)
        delete(item.quatre)
        location.reload()
    } else if (id == 'cinq') {
        count = count - item.cinq.incart
        localStorage.setItem('totalproduct', count)
        total = total - (item.cinq.price * item.cinq.incart)
        localStorage.setItem('totalCost', total)
        delete(item.cinq)
        location.reload()
    } else if (id == 'six') {
        count = count - item.six.incart
        localStorage.setItem('totalproduct', count)
        total = total - (item.six.price * item.six.incart)
        localStorage.setItem('totalCost', total)
        delete(item.six)
        location.reload()
    } else if (id == 'sept') {
        count = count - item.sept.incart
        localStorage.setItem('totalproduct', count)
        total = total - (item.sept.price * item.sept.incart)
        localStorage.setItem('totalCost', total)
        delete(item.sept)
        location.reload()
    }
    localStorage.setItem('item', JSON.stringify(item))
}


function AddItemFromLearn() {

    let view = localStorage.getItem('current_view')
    view = parseInt(view)

    TotalProduct(ItemArray[view])
    totalCost(ItemArray[view])

}

function checkout() {

}




