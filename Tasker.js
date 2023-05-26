import React, { useState } from 'react';

// Task Creation component
const TaskCreation = ({ onTaskCreate }) => {
  const [title, setTitle] = useState('');
  const [category, setCategory] = useState('');

  const handleTitleChange = (e) => {
    setTitle(e.target.value);
  };

  const handleCategoryChange = (e) => {
    setCategory(e.target.value);
  };

  const handleTaskCreate = () => {
    const task = {
      title,
      category,
    };

    onTaskCreate(task);
    setTitle('');
    setCategory('');
  };

  return (
    <div>
      <input
        type="text"
        value={title}
        onChange={handleTitleChange}
        placeholder="Task Title"
      />
      <input
        type="text"
        value={category}
        onChange={handleCategoryChange}
        placeholder="Category"
      />
      <button onClick={handleTaskCreate}>Create Task</button>
    </div>
  );
};

// Task List component
const TaskList = ({ tasks }) => {
  return (
    <div>
      {tasks.map((task, index) => (
        <div key={index}>
          <h3>{task.title}</h3>
          <p>{task.category}</p>
        </div>
      ))}
    </div>
  );
};

// App component
const App = () => {
  const [tasks, setTasks] = useState([]);

  const handleTaskCreate = (task) => {
    setTasks([...tasks, task]);
  };

  return (
    <div>
      <h1>Task Manager</h1>
      <TaskCreation onTaskCreate={handleTaskCreate} />
      <TaskList tasks={tasks} />
    </div>
  );
};

export default App;
