<div class="d-flex align-items-center">
    <span class="me-2">Sort by name:</span>
    <a href="{{ route('students.index', ['sort' => 'asc', 'college_id' => request('college_id')]) }}" 
       class="btn btn-sm btn-outline-secondary {{ request('sort') == 'asc' ? 'active' : '' }}">
       A-Z <i class="fas fa-arrow-up"></i>
    </a>
    <a href="{{ route('students.index', ['sort' => 'desc', 'college_id' => request('college_id')]) }}" 
       class="btn btn-sm btn-outline-secondary ms-1 {{ request('sort') == 'desc' ? 'active' : '' }}">
       Z-A <i class="fas fa-arrow-down"></i>
    </a>
</div>