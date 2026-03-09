echo $SERVICE_URL

SERVICE_URL="https://altegio-etl-54078641949.europe-west1.run.app"

START_DATE="2026-01-01"
END_DATE="2026-04-01"

CURRENT_DATE="$START_DATE"
MONTH=1

while [[ "$CURRENT_DATE" < "$END_DATE" ]]; do

NEXT_DATE=$(date -d "$CURRENT_DATE +1 month" +"%Y-%m-%d")

TOKEN=$(gcloud auth print-identity-token)

echo ""
echo "========================================="
echo "🚀 MONTH $MONTH"
echo "📅 LOADING: $CURRENT_DATE → $NEXT_DATE"
echo "========================================="

RESPONSE=$(curl -s -X POST "$SERVICE_URL" \
-H "Authorization: bearer $TOKEN" \
-H "Content-Type: application/json" \
-d "{
\"start_date\":\"$CURRENT_DATE\",
\"end_date\":\"$NEXT_DATE\",
\"mode\":\"sales\"
}")

echo "📊 RESPONSE:"
echo "$RESPONSE"

echo "✅ FINISHED MONTH: $CURRENT_DATE"

CURRENT_DATE=$NEXT_DATE
MONTH=$((MONTH+1))

sleep 2

done

echo ""
echo "========================================="
echo "🎉 ALL DATA LOADED"
echo "========================================="