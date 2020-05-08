<?php


namespace App\Models;


use PDO;

class Task extends \Core\Model
{
    /**
     * Add new task
     *
     * @param $data
     * @return boolean
     */
    public static function add($data)
    {
        $db = static::getDB();
        $query = sprintf('INSERT INTO task (name, email, content, status) VALUES ("%s", "%s", "%s", "%s")',
            htmlspecialchars($data['name']),
            htmlspecialchars($data['email']),
            htmlspecialchars($data['content']),
            htmlspecialchars($data['status']));
        $db->query($query);
        return true;
    }

    /**
     * Update task
     *
     * @param $data
     * @return boolean
     */
    public static function update($id, $data)
    {
        $db = static::getDB();
        if (isset($data['admin_edit'])) {
            $query = sprintf('UPDATE task SET content="%s", status="%s", admin_edit="%s" WHERE id="%s";',
                htmlspecialchars($data['content']),
                htmlspecialchars($data['status']),
                htmlspecialchars($data['admin_edit']),
                htmlspecialchars($id));
        } else {
            $query = sprintf('UPDATE task SET content="%s", status="%s" WHERE id="%s";',
                htmlspecialchars($data['content']),
                htmlspecialchars($data['status']),
                htmlspecialchars($id));
        }
        $db->query($query);

        return true;
    }

    /**
     * Get all the tasks as an associative array
     *
     * @return array
     */
    public static function getAll()
    {
        $db = static::getDB();
        $allEntries = $db->query('SELECT * FROM task');
        return $allEntries->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     *  Get one task as an associative array
     *
     * @param $id
     * @return array
     */
    public static function findOne($id)
    {
        $db = static::getDB();
        $task = $db->query('SELECT * FROM task WHERE id = ' . $id);
        return $task->fetch(PDO::FETCH_ASSOC);
    }
}
