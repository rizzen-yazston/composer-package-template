# composer-package-template

## Description
A simple Composer template for starting a library package using Git for versioning control.

## Requirements
* Composer installed
* Git host account (where your project's repository will reside)
* [Optional] Packagist account (convenient way to share your project via Composer)

## Installation
From a console prompt enter the following command and press <Enter>. Replace the *path* of the command with the path of your project, even if the directory does not exist as it will be created by the command.

```
composer create-project rizzen/composer-package-template path
```

## Usage
Once template installed, make necessary changes to the existing files, add source code files (and directories) for your project.

### Edit meta data files
Edit the date and name in the LICENSE file (MIT license), or simple replace the LICENSE file with another license that is suitable for the project.

The included README.md provides a good start for your project README.md file, as it contains the common sections typically found in many projects' README.md file. Edit the README.md file as needed to reflect your project.

Edit the composer.json file to reflect your project, such as vendor identifier, project package name, author(s) details, descriptions, etc.

Remember to use your entity's vendor identifier in the namespace of your project files.

### Update project source files
Once satisfied with the above meta files editing, it is time to to add your project's source code. Begin with removing, or renaming and editing, the example class file in *src* directory. Create additional sub directories as required, and add the source files.

If planning to do unit testing, create a directory in package directory outside the src directory, and place all your unit testing files there, this way you can keep your src directory clean.

### Hosted Git repository
No need to add the entire project before setting up Git in your package. Even one class file in src directory is enough to start off with.

On your hosted Git repository website, create repository of the *same name* as your package. Ensure the repository is public, no need to add README.md or LICENSE as these you already edited from above section.

At console prompt, enter the following commands, each followed by <Enter>. Adjust the commands as needed, but particular the *email*, *git-username*, and *package-name* with your project's details.

```
git init
git remote add origin email:git-username/package-name.git
git add --all
git commit -m "Initial project setup."
git tag -a v0.0.1 -m "Initial project setup."
git push -u origin master
```

### Register package in Packagist
Even though not a requirement, it is recommended to register your package on Packagist, and have it linked to your hosted Git repository. By registering your package on Packagist, you are enabling easier usage of your package, as Packagist will use the Git repository tags to determine which version of your package to deliver to the user's project via Composer. Here the term *user* means application user, or developer of application, or another library package dependent on your project.


## Authors and Contributors
Rizzen Yazston

## License
This Composer template is released under the BSD-3-Clause license, see included LICENSE file.
