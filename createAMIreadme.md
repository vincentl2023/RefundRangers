How to Run AMI and Attach to Pipeline for Updates from GitHub
This guide provides step-by-step instructions for launching an Amazon Machine Image (AMI) and attaching it to a pipeline for updates from GitHub. This guide assumes that you have an AWS account and basic knowledge of AWS services.

Launching an AMI
Go to the EC2 dashboard in your AWS console and navigate to the "AMIs" section.
Select the newest AMI.
Launch an instance from the selected AMI.
Give your instance a name.
Use "RR-Production" for Keypair.
Select "default" for the existing security group.
Click "Advanced Details".
Under "IAM Instance profile", select "EC2CodeDeploy".
Launch the instance.
Attaching to Pipeline for Updates from GitHub
Go to the CodeDeploy dashboard in your AWS console and navigate to the "Applications" section.
Click on the application name to edit it.
Select "RR_CICD-DP" and click "Edit".
Change "Tag Group 1" to your newly created EC2 instance in the "Value" field.
Save your changes.
Wait for your EC2 instance to build and load.
Test using the Public IP4 address (note that it must be http:// only, so remove the "s" from "https" if you want it to work).
Congratulations! You have successfully launched an AMI and attached it to a pipeline for updates from GitHub.
