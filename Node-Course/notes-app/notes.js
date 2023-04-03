const chalk = require('chalk')
const fs=require('fs')


const addNote= (title,body)=>{
  //First we load existing notes
  const notes=loadNotes()

  //cheking duplicate notes
  const duplicateNotes = notes.find( (note) => note.title === title)
  
  if(!duplicateNotes) {
     //push data into json file
     notes.push ({
        title : title,
        body : body
      })

       //save data into the file
       saveNotes(notes)
       console.log(chalk.green.inverse.bold("New Note Added"))
  } else {
    console.log(chalk.red.inverse.bold("Note title taken"))
  }
 
}

const removeNote = (title) =>{
    const notes=loadNotes()
    const notesToKeep= notes.filter( (note) =>note.title !== title)
    if(notes.length === notesToKeep.length){
      console.log(chalk.red.inverse.bold("Note Not Found"))
    } else {
      console.log(chalk.green.inverse.bold("Note Removed"))
      saveNotes(notesToKeep)
    }

}



const saveNotes = (notes)=> {
    const convertedData=JSON.stringify(notes)
    
    fs.writeFileSync('notes.json',convertedData)
}

const loadNotes =  ()=> {
    try {
        const BufferData=fs.readFileSync('notes.json')
        const JSONdata=BufferData.toString()
        const data=JSON.parse(JSONdata)
        return data

    } catch(e) {
        return []

    }
  }

const listNotes=()=>{
  const notes=loadNotes()
  
  console.log(chalk.white.inverse("Your Notes..."))
  notes.forEach((note)=>{
    
    console.log(chalk.white(note.title))
  })

}

const readNotes= (title)=>{
  const notes=loadNotes()
  const findNote=notes.find((note)=> note.title === title)
  if(!findNote){
    console.log(chalk.red.inverse("No Note Found"))
  } else{
  console.log(chalk.italic.hex('#FFA500').inverse(findNote.title))
  console.log(findNote.body)
  }


}

module.exports= {
    addNote : addNote,
    removeNote : removeNote ,
    listNotes : listNotes,
    readNotes : readNotes
}