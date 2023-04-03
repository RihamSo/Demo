const fs=require('fs')

//Get data from json file
const BufferData=fs.readFileSync('1-json.json')
const JSONdata=BufferData.toString()
const data=JSON.parse(JSONdata)

//update data of file
data.name="Riham"
data.age=23
console.log(data.name,data.age)


 //Store updated data into json file
const Newdata=JSON.stringify(data)
fs.writeFileSync('1-json.json',Newdata)