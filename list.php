 <?php 
require 'includes/connection.php';?>
 <section>
    <figure>
      <blockquote>
        $title
        $text
      </blockquote>
    </figure>
  </section>
            <div class='container'>
              <div class='row'>
                <div class='remove'>
                  <form method='post' action='delete.php'>
                    <input hidden name='delnote' value='$id' ></input>
                    <span id='menu'><input type='submit' name='sub' value='Удалить' id='$id'></span>
                  </form>
                </div>
                <div class='edit'>
                  <form method='post' action='edit.php' class='editform'>
                    <input hidden name='ednote' value='$id'></input>
                    <span id='menu'><button>Редактировать</button></span>
                  </form>
                </div
              </div>
            </div>
          </div>