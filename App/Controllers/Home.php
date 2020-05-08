<?php

namespace App\Controllers;

use App\Models\Task;
use App\Models\User;
use \Core\View;
use Exception;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class Home extends \Core\Controller
{
    /**
     * Before filter. Return false to stop the action from executing.
     *
     * @return void
     */
    protected function before()
    {
    }

    /**
     * Show the index page
     *
     * @return void
     * @throws Exception
     */
    public function indexAction()
    {
        session_start();
        $tasks = Task::getAll();
        View::render('Home/index.php', [
            'tasks' => $tasks,
        ]);
    }

    /**
     * New task
     *
     * @return void
     * @throws Exception
     */
    public function newAction()
    {
        if (!empty($_POST)) {
            $task = $_POST;
            if (!isset($task['status'])) {
                $task['status'] = 0;
            }
            $task['status'] = ($task['status'] === 'on') ? 1 : 0;
            if (Task::add($task)) {
                header('Location: /?added=true');
            } else {
                View::renderTemplate('Home/500.php');
            }
        } else {
            $isAdmin = false;
            View::render('Home/new.php', [
                'isAdmin' => $isAdmin
            ]);
        }

    }

    /**
     * Update task
     *
     * @return void
     * @throws Exception
     */
    public function updateAction()
    {
        session_start();
        $taskId = $_GET['id'];
        if (!empty($_POST) && !empty($_GET)) {

            $task = $_POST;
            $id = $_GET['id'];

            if (!isset($task['status'])) {
                $task['status'] = 0;
            }

            $task['status'] = ($task['status'] === 'on') ? 1 : 0;

            $oldContent = Task::findOne($taskId)['content'];
            $newContent = $task['content'];
            if ($newContent != $oldContent) {
                $task['admin_edit'] = 1;
            }
            if (isset($_SESSION['logged_in'])) {
                if (Task::update($id, $task)) {
                    header('Location: /');
                } else {
                    View::renderTemplate('Home/500.php');
                }
            } else {
                header('Location: /login');
            }

        } elseif (isset($_SESSION['logged_in'])) {
            $oldTask = Task::findOne($taskId);
            View::render('Home/update.php', [
                'task' => $oldTask
            ]);
        } else {
            header('Location: /login');
        }

    }

    /**
     * Login form
     *
     * @return void
     * @throws Exception
     */
    public function loginAction()
    {
        $error = '';
        if (!empty($_POST)) {
            if ($_POST['name'] == 'admin' && $_POST['password'] == '123') {
                session_start();
                $_SESSION['logged_in'] = true;
                header('Location: /');
            } else {
                $error = 'Incorrect login or password';
            }
        }
        if (!isset($_SESSION['logged_in'])) {
            View::render('Home/login.php', [
                'error' => $error
            ]);
        }


    }

    /**
     * Logout
     *
     * @return void
     * @throws Exception
     */
    public function logoutAction()
    {
        session_start();
        if (isset($_SESSION['logged_in'])) {
            unset($_SESSION['logged_in']);
            session_unset();
        }
        header('Location: /');

    }

}
