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
Once the template is installed, make the necessary changes to the existing files, add a few source code files (and directories) for your project.

### Edit meta data files
Edit the *date* and *name* in the LICENSE file (MIT license), or simple replace the LICENSE file with another license that is suitable for the project.

The included README.md provides a good start for your project's README.md file, as it contains the common sections typically found in many projects' README.md file. Edit the README.md file as needed to reflect your project.

Edit the composer.json file to reflect your project, such as vendor identifier, project package name, author(s) details, descriptions, etc.

Remember to use your vendor identifier in the namespace of your project files.

### Update project source files
Once satisfied with the above meta files editing, it is time to to add your project's source code. Begin with removing, or renaming and editing, the example class file in *src* directory. Create additional sub directories as required, and add the source files.

If planning to do unit testing, create a directory in package directory outside the src directory, and place all your unit testing files there, this way you can keep your src directory clean.

### Hosted Git repository
No need to add the entire project before setting up Git in your package. Even one class file in src directory is enough to start off with.

On your hosted Git repository website, create repository of the *same name* as your package. Ensure the repository is *public*, and there is no need to add README.md or LICENSE as you already have edited them from the above section.

At console prompt, enter the following commands, each followed by pressing <Enter>. Adjust the commands as needed, but particular the *email*, *git-username*, and *package-name* with your project's details.

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

On Packagist website https://packagist.org/ login with your account, if not create an account. Then head over to *Submit* page, which just has a single URL field to be filled in with the URL to your project's Git repository, and a Submit button.

At this point you should see a warning: *This package is not auto-updated. Please set up the GitHub Hook for Packagist so that it gets updated whenever you push!*

The easiest way of keeping your package up to date is to allow your Git repository send notification to Packagist. Else you can manually update your package on Packagist using the green Update button.

#### For GitHub
Simple process:

1. Navigate to your repository in Github and click on *Settings*.
2. In this document select the *Webhooks* option from the left menu.
3. Click on *Add webhook* and search for Packagist and then click on it.
4. On the Webhooks / Add webhook page, fill in the 4 fields:
   - Payload URL with https://packagist.org/api/github?username=GitHubUsername, where GitHubUsername is your GitHub account username.
   - Content Type as application/json
   - Secret is your Packagist API Token, obtained from your Packagist profile page.
   - Which events, just *push* events is good enough.
5. Click Add webhook to complete the process.

## Authors and Contributors
Rizzen Yazston

## License
This Composer template is released under the MIT license, see included LICENSE file.
