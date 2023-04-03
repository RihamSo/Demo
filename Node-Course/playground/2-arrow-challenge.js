// Goal: Create method to get incomplete tasks
//
// 1. Define getTasksToDo method
// 2. Use filter to to return just the incompleted tasks (arrow function)
// 3. Test your work by running the script

const tasks = {
    tasks: [{
        text: 'Grocery shopping',
        completed: true
    },{
        text: 'Clean yard',
        completed: false
    }, {
        text: 'Film course',
        completed: false
    }],
    //----------------1------------------
    // getTasksToDo () {
    //     const completedTask=[]
    //     this.tasks.filter((task)=>{
    //         if (task.completed === false) {
    //             completedTask.push({
    //                 text:task.text,
    //                 completed:task.completed
    //         })
    //         }
    //     })
    //     return completedTask
    // }

    //-------------------2------------------------
    // getTasksToDo(){
    //     const completedTask=this.tasks.filter((task)=>{
    //       return task.completed===false
    //     })
    //     return completedTask
    // }

    //---------------------------3--------------------
    // getTasksToDo(){
    //     return this.tasks.filter((task)=>{
    //       return task.completed===false
    //     })
    // }
    

    //--------------------------4------------------------
    getTasksToDo(){
        return this.tasks.filter((task)=> task.completed===false )
    }
}

console.log(tasks.getTasksToDo())