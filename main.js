function alertFunction() {
    let count = 0;
    let tasks = [];
    while(count < 10){
        let task = prompt('タスクを入力してください');
        tasks.push(task);
        console.log(tasks);
        count++;
    }
  }