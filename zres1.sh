
#!/bin/bash
# Variables
CONTAINER_NAME="zpub_db1_1"
DATABASE_NAME="wordpress"
USERNAME="root"
PASSWORD="your_mysql_password"
FNAME="zpub1_1234"
BACKUP_ZIP="$FNAME.zip"
BACKUP_FILE="$FNAME.sql"
BACKFILE="$FNAME"
rm -f $BACKUP_ZIP
rm -f $BACKUP_FILE
cp $BACKFILE $BACKUP_ZIP
docker exec -i "$CONTAINER_NAME" ls -anp /tmp/
unzip -o $BACKUP_ZIP -d ./
docker exec -i "$CONTAINER_NAME" mysql -u"$USERNAME" -p"$PASSWORD" "$DATABASE_NAME" < $BACKUP_FILE
docker exec -i "$CONTAINER_NAME" ls -anp /tmp/
rm -f $BACKUP_ZIP
rm -f $BACKUP_FILE
echo "Restore completed"

