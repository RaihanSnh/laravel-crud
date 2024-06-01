<x-layout>
    <div class="mid-container">
        <h2>Update News</h2>
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" value="--" placeholder="Enter title">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" placeholder="Enter description">--</textarea>
            </div>
            <div class="form-group">
                <label for="banner_image">Banner Image:</label>
                <input type="file" id="banner_image" name="banner_image">
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select name="status" id="status">
                    <option value="">-- Select --</option>
                    <option value="active">Active</option>
                    <option value="in-active">In Active</option>
                </select>
            </div>
    
            <button type="submit" class="form-btn">Update News</button>
        </form>
        <br>
        <a href="#" class="action-link view-link">Back</a>
    </div>
</x-layout>