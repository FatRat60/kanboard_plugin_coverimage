# Kanboard Plugin Coverimage

This plugin adds a coverimage function to tasks on the board, and allows you to set a project image to use as a logo for projects.

This software is in maintenance mode. It doesn't mean it's abandoned, but there is no significant feature development. Pull-requests are still accepted as long as the guidelines are followed.

## Image for tasks

![cover_screenshot](https://cloud.githubusercontent.com/assets/1961634/23507319/c7e38892-ff4c-11e6-90c5-453f9bda4a0f.png)

## Image for projects

![image](https://user-images.githubusercontent.com/26339368/46497665-3842a800-c7e9-11e8-8852-bfa60ec5ec3a.png)

![image](https://user-images.githubusercontent.com/26339368/46497695-4d1f3b80-c7e9-11e8-9861-61b08821f7ba.png)

![image](https://user-images.githubusercontent.com/26339368/46497724-5dcfb180-c7e9-11e8-82ea-173d633f602d.png)

## API

### setCoverimage

- Purpose: **Set a task's Coverimage**
- Parameters:

    - **task_id** (integer, required)
    - **file_id** (integer, required)

- Result on success: **true**
- Result on failure: **false**

Request example:

    {
        "jsonrpc": "2.0",
        "method": "setCoverimage",
        "id": 68492039,
        "params": {
            "task_id": 3,
            "file_id": 1
        }
    }

Response example:

    {
        "jsonrpc": "2.0",
        "id": 68492039,
        "result": true
    }

### removeCoverimage

- Purpose: **Remove a task's Coverimage**
- Parameters:

    - **task_id** (integer, required)

- Result on success: **file_id** or **null** if no Coverimage to remove
- Result on failure: **false**

Request example:

    {
        "jsonrpc": "2.0",
        "method": "removeCoverimage",
        "id": 18043856,
        "params": {
            "task_id": 3
        }
    }

Response example:

    {
        "jsonrpc": "2.0",
        "id": 18043856,
        "result": 1
    }

### setProjectCoverimage

- Purpose: **Set a project's Coverimage**
- Parameters:

    - **project_id** (integer, required)
    - **file_id** (integer, required)

- Result on success: **true**
- Result on failure: **false**

Request example:

    {
        "jsonrpc": "2.0",
        "method": "setProjectCoverimage",
        "id": 473819385,
        "params": {
            "project_id": 1,
            "file_id": 5
        }
    }

Response example:

    {
        "jsonrpc": "2.0",
        "id": 473819385,
        "result": true
    }

### removeProjectCoverimage

- Purpose: **Remove a project's Coverimage**
- Parameters:

    - **project_id** (integer, required)

- Result on success: **file_id** or **null** if no Coverimage to remove
- Result on failure: **false**

Request example:

    {
        "jsonrpc": "2.0",
        "method": "removeProjectCoverimage",
        "id": 382937566,
        "params": {
            "project_id": 1
        }
    }

Response example:

    {
        "jsonrpc": "2.0",
        "id": 382937566,
        "result": 5
    }

Plugin for <https://github.com/kanboard/kanboard>

## Author

- [BlueTeck](https://github.com/BlueTeck)
- [creecros](https://github.com/creecros)
- License MIT

## Installation

- Decompress the archive in the `plugins` folder

or

- Create a folder **plugins/Coverimage**
- Copy all files under this directory
