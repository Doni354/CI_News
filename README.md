Here is the README translated into English:

---

# CI_News
## Codeigniter 4 Project Tutorial by PetaniCode

### Project Description
CI_News is a tutorial project using CodeIgniter 4 created by PetaniCode. This project aims to provide a step-by-step guide to building a simple news application using the CodeIgniter 4 framework.

### Installation Instructions

1. **Clone this repository:**

    ```bash
    git clone https://github.com/Doni354/CI_News
    ```

2. **Navigate to the project directory:**

    ```bash
    cd CI_News
    ```

3. **Install dependencies using Composer:**

    ```bash
    composer install
    ```

4. **Rename the `env` file and configure the database connection:**

    - Rename the `env` file to `.env`
    - Open the `.env` file and adjust the database configuration according to your local setup.

5. **Create a database named `ci_news` and run the migration:**

    ```bash
    php spark migrate
    ```

6. **Seed the database with initial data:**

    ```bash
    php spark db:seed
    ```

7. **Start the development server:**

    ```bash
    php spark serve
    ```

8. **Access the application:**
    - Open your browser and go to `http://localhost:8080`

9. **To add news data, access the admin page:**

    - Open `http://localhost:8080/admin/news`

### Note
This project is still under development. Please be aware that there may be bugs or incomplete features.

---

With a more structured explanation, users will find it easier to understand the steps required to install and run the project.