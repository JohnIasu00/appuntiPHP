    <h1>Formulario che si interfaccia a una pagina php</h1>

        <fieldset>
            <legend>Formulario che si interfaccia a una pagina php</legend>
            <form action="submit_contact.php" method="GET">
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email">
                </div>
                <div>
                    <label for="message">Il vostro messaggio<br></label>
                    <textarea placeholder="Esprimetevi" name="message"></textarea>
                </div>
                <button type="submit">Invio</button>
            </form>
        </fieldset>
    

    <h1>Inserimento di file</h1>

        <fieldset>
            <legend>Inserimento di file</legend>
            <form action="submit_file.php" method="GET">
                <!-- aggiunta campo upload ! -->
                <div class="mb-3">
                    <label for="screenshot" class="form-label">Inserire cattura schermo</label>
                    <input type="file" class="form-control" id="screenshot" name="screenshot" />
                </div>
                <!-- Invio file -->
                <button type="submit" class="btn btn-primary">Invio</button>
            </form>

        </fieldset>
            
            

