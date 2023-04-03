// const square = function (x) {
//     return x*x
// }

// const square =(x)=>{
//     return x*x
// }

// const square = (x) => x*x

// console.log(square(10))

const object = {
    name: "Birthday Party",
    GuestList : ['A','B','C','D'],
    printGuestList() {
        
        console.log("Guset List For " + this.name) 

        this.GuestList.forEach((guest) => {
            console.log(guest + " is attending " + this.name)
        })
    }
}
object.printGuestList()