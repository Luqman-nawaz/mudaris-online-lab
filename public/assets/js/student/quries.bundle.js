
    // Array to store posted queries
    var queries = [];

    // Function to post a query
    function postQuery() {
        var query = $('#queryInput').val();
        if (query.trim() !== '') {
            queries.push({
                query: query,
                answers: []
            });
            $('#queryInput').val('');
            displayQueries();
        }
    }

    // Function to display posted queries
    function displayQueries() {
        var queriesContainer = $('#queriesContainer');
        queriesContainer.empty();

        queries.forEach(function (queryObj) {
            var queryHtml = `
                <div class="query-card">
                    <p><strong>Query:</strong> ${queryObj.query}</p>
                    <div class="answers-list">
                        <h6>Answers:</h6>
            `;

            queryObj.answers.forEach(function (answer) {
                var answerHtml = `
                    <div class="answer">${answer}</div>
                `;
                queryHtml += answerHtml;
            });

            queryHtml += `
                    </div>
                </div>
            `;

            queriesContainer.append(queryHtml);
        });
    }
