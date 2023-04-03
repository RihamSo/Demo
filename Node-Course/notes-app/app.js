const chalk=require('chalk')
const yargs=require('yargs')
const notes =require("./notes.js")

//Customize yargs version
yargs.version('1.1.0')

//Create add command
yargs.command({
    command:'add', 
    describe:'Add a new Note.',

    builder : {
        title: {
            describe : 'Note Title.',
            demandOption : true,  //to make it required
            type : 'string'
        },

        body : {
            describe : "Note Body",
            demandOption : true,
            type : 'string'

        }
    },

    handler(argv){
       notes.addNote(argv.title,argv.body)
    }

})


//Craete remove command

yargs.command({
    command : 'remove',
    description : "Remove a note.",

    builder : {
        title : {
            describe : 'Note title',
            demandOption : true,
            type : 'string'
        }
    },

    handler(argv) {
       notes.removeNote(argv.title)
    }
})

//Create list command

yargs.command({
    command : 'list',
    description : 'Listing notes.',
    handler() {
       notes.listNotes()
    }
})

// Create read command

yargs.command({
    command : 'read',
    description : 'Read notes.',
    builder:{
        title : {
           description: "Note title",
           demandOption : true,
           type : "string"
        }
    },
    handler(argv){
        notes.readNotes(argv.title)
    }
})

yargs.parse()



// const validator=require('validator')

// const returnvalue=notes()
// console.log(returnvalue)
// const greenmsg=chalk.green.bgRed.bold.inverse('Success')
// console.log(greenmsg)
// console.log(validator.isEmail('riham@ gmail.com'))
// const command=process.argv[2]
// if(command === 'add'){
//     console.log("Addind notes")
// } else if(command === 'remove') {
//     console.log("Removing notes")
// }
// console.log(process.argv)



