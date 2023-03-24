let pays = ["France", "Luxenbourg"]

let triePays = pays.sort()

let input = document.getElementById("pays")

input.addEventListener("keyup", (e) => {
    removeElements()
    for (let i of triePays) {
        if (i.toLowerCase().startsWith(input.value.toLowerCase()) && input.value != "") {
            let listItem = document.createElement("li") 
            listItem.classList.add("list-items")
            listItem.style.cursor = "pointer"
            listItem.setAttribute("onclick", "displayPays('" + i + "')")
            let word = "<b>" + i.substring(0, input.value.length) + "<b>"
            word += i.substring(input.value.length)
            listItem.innerHTML = word
            document.querySelector(".list").appendChild(listItem)
        }
    }
})

function displayPays(pays) {
    input.value = pays
}

function removeElements() {
    let items = document.querySelectorAll(".list-items")
    items.forEach((item) => {
        item.remove()
    })
}