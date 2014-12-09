<?PHP
// Defines getTodoList function
require 'todoList.php';

function prettyDate ($rawDate) {
  return $rawDate;
}
# home page:
#   - list the todos in a table
# - 
?><!DOCTYPE html>
<html lang="en">
  <head>
    <title>Seandon's Todos Site</title>
    <meta charset="UTF-8">
  </head>
  <body>
    <?PHP require 'newTodoButton.php'; ?>
    <table>
      <thead>
        <tr>
          <th>Task</th>
          <th>Priority</th>
          <th>Added</th>
          <th>Completed</th>
        </tr>
      </thead>
      <tbody>
        <?PHP
        #$todoList = [];
        #$fakeTodo = [
        #  'task': 'Im fake!',
        #  'priority': 'low',
        #  'dateAdded': 'never',
        #  'dateCompleted': 'never'
        #];
        #$todoList[0] = $fakeTodo;
        $todoList = getTodoList();
        foreach ($todoList as $id => $todo) { ?>
          <?PHP // Set the table row to a CSS class equal to the priority ?>
          <tr class="<?PHP echo $todo['priority']; ?>">
            <td><?PHP echo $todo['task']; ?></td>
            <td><?PHP echo $todo['priority']; ?></td>
            <td><?PHP echo prettyDate($todo['dateAdded']); ?></td>
            <td><?PHP
            // If the task has not been completed (dateComplete isnt set)
            if (!isset($todo['dateCompleted'])) { // Put a button to complete the task! ?>
              <button class="button">Complete!</button>
            <?PHP } else {
              echo prettyDate($todo['dateCompleted']);
            } ?></td>
          </tr>
        <?PHP } ?>
      </tbody>
    </table>
    <?PHP require 'newTodoButton.php'; ?>
  </body>
</html>