### How to Run AMI and Attach to Pipeline for Updates from GitHub

This guide provides step-by-step instructions for launching an Amazon Machine Image (AMI) and attaching it to a pipeline for updates from GitHub. This guide assumes that you have an AWS account and basic knowledge of AWS services.

#### Launching an AMI

1. Go to the EC2 dashboard in your AWS console and navigate to the "AMIs" section.
2. Select the **"newest"** AMI.
3. Launch an instance from the selected AMI.
4. Give your instance a name.
5. Use "RR-Production" for Keypair.
6. Select **"default"** for the existing security group.
7. Click "Advanced Details".
8. Under "IAM Instance profile", select "EC2CodeDeploy".
9. Launch the instance.

#### Attaching to Pipeline for Updates from GitHub

1. Go to the CodeDeploy dashboard in your AWS console and navigate to the "Applications" section.
2. Click on the application name to edit it.
3. Select "RR_CICD-DP" and click "Edit".
4. Change "Tag Group 1" to your newly created EC2 instance in the "Value" field.
5. Save your changes.
6. Then go into the search and go back to EC2.
7. Wait for your EC2 instance to build and load.
8. Test using the Public IP4 address (note that it must be http:// only, so remove the "s" from "https" if you want it to work).

Congratulations! You have successfully launched an AMI and attached it to a pipeline for updates from GitHub.
