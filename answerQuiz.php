<?php include 'includes/header.php'; ?>

  <main class="main-area single-task">
    <article class="task">
      <h2 class="task-title">Log a new task:</h2>
      <form id="task-form" method="POST">
        <label for="title">
          <span class="label">Task title</span>
          <input type="text" name="title" required></input>
        </label>
        <label for="description">
          <span class="label">Task description</span>
          <textarea name="description" rows="10" cols="50" minlength="20" required></textarea>
        </label>
        <label for="prediction">
          <span class="label">Prediction</span>
          <span class="field-description">What do you expect will happen?</span>
          <textarea name="prediction" rows="10" cols="50" minlength="20" required></textarea>
        </label>
        <fieldset class="stress-level">
            <legend class="label">Your current stress level</legend>
            <label for="1">
              <input type="radio" name="pre-level" value="1" id="1" required>
              Very Stressed
            </label>
            <label for="2">
              <input type="radio" name="pre-level" value="2" id="2" required>
              Somewhat Stressed
            </label>
            <label for="3">
              <input type="radio" name="pre-level" value="3" id="3" required>
              Neutral
            </label>
            <label for="4">
              <input type="radio" name="pre-level" value="4" id="4" required>
              Somewhat Relaxed
            </label>
            <label for="5">
              <input type="radio" name="pre-level" value="5" id="5" required>
              Very Relaxed
            </label>
          </fieldset>
          <input type="submit" value="Log new task">
      </form>
    </article><!-- .task -->
  </main><!-- .main-area -->

  <nav class="site-nav">
    <ul>
      <li>
        <a href="tasklist.html">All tasks</a>
      </li>
      <li>
        <a href="newtask.html">New task</a>
      </li>
      <li>
        <a href="review.html">Review</a>
      </li>
    </ul>
  </nav><!-- .site-nav -->
  <?php include 'includes/footer.php'; ?>