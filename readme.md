# Map Reduce via Amazon EMR

Simple script to map apache logs and reducer would show us distribution of HTTP status code rate w.r.t. unique URI

## Tech Stack
* AWS CLI
* PHP (Mapper / Reducer)
* Raw Apache Logs

## To copy this repo
* `git clone https://github.com/mayurah/AWS-EMR-PHP.git`

## Alternate Commands

### Check Cluster ID of running EMR instances

`aws emr list-clusters`

### Execute Jobs

`aws emr add-steps --cluster-id j-XXXX --steps file://./jobs.json`

`aws emr add-steps --cluster-id j-XXXX --steps Type=STREAMING,Name='process apache log stream',ActionOnFailure=CONTINUE,Args=[-files,s3://mybucketaddr/emr/mapr,-mapper,mapr/map.php,-reducer,mapr/reduce.php,-input,s3://mybucketaddr/emr/input,-output,s3://mybucketaddr/emr/output]`

#### Track Job
`aws describe-step --cluster-id j-XXXX --step-id s-YYYY`

## Pitfalls

* Debugging, Debugging, Debugging
* IAM Role: "elasticmapreduce:*"
* Configure AWS CLI: `aws configure` & region `us-west-2`
* Ensure you've PHP, Python or whatever you use as a mapr in your clusters
* Look for the clues inside clusters via  `cd /mnt/yarn/ && tree; cd /mnt1/yarn/ && tree`
* Ensure you've S3 bucket is same region to have efficiency; and for more performance go with dedicated HDFS storage
* To extract .GZ error logs `gunzip -d *`
* Ensure that you have optimal memory and compute with enough number of clusters to distribute the workload with ease

## References

* http://docs.aws.amazon.com/cli/latest/reference/emr/index.html#cli-aws-emr
* For sample data, `aws s3 ls s3://elasticmapreduce`
*
